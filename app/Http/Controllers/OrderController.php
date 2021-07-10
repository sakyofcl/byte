<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Model\Order;
use App\Model\order_shipping_addresses;
use App\Model\Orders_products;
use App\Model\product;
use App\Model\Payment_methods;
use App\Model\orders_payment_method;
use App\Model\Orders_slip;
use App\Model\order_key;
use App\Model\order_stage;
use App\Model\order_payment_status;

class OrderController extends Controller
{
    public function index($id)
    {
        $paymentmethods = Payment_methods::all();
        $product = product::find($id, ['pid', 'name', 'price', 'image']);
        $cart = session()->get('cart');

        if (!$cart) {
            if ($product) {
                $cart = [
                    $id => [
                        "name" => $product->name,
                        "price" => $product->price,
                        "photo" => $product->image,
                        "qty" => 1,
                        "id" => $product->pid
                    ]
                ];
                session()->put('cart', $cart);
            } else {
                return "no product avilable";
            }
        }

        #if cart alrety exicets we can update quenty
        if (!isset($cart[$id])) {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "photo" => $product->image,
                "qty" => 1,
                "id" => $product->pid
            ];
            session()->put('cart', $cart);
        }

        return view('checkout')->with('product', ['paymentmethods' => $paymentmethods]);
    }

    public function default()
    {
        $paymentmethods = Payment_methods::all();
        return view('checkout')->with('product', ['paymentmethods' => $paymentmethods]);
    }
    public function store(Request $data)
    {

        $store = new Order;
        $address = new order_shipping_addresses;
        $products = new Orders_products;
        $payment = new orders_payment_method;
        $slip = new Orders_slip;
        $stage = new order_stage;
        $paymentStatus = new order_payment_status;

        #it will fetch order key and increment then store
        $id = order_key::where('name', 'BO_')->get('key');
        $key = json_decode($id)[0];
        $orderIndex = $key->key + 1;


        # ----------- this is order id -----------
        $unique_oid = $orderIndex;

        # ----------- it will store on orders table -----------
        $store->oid = $unique_oid;
        $store->name = $data->name;
        $store->email = $data->email;
        $store->phone = $data->number;
        $store->note = $data->ordernode;
        $store->date = date('Y-m-d H:i:s');
        $store->status = "prepare";
        # -------------- end -----------

        # store order ship address on ship_address table
        $address->oid = $unique_oid;
        $address->street = $data->address;
        $address->city = $data->town;
        $address->zip = $data->zipcode;
        $address->province = $data->province;
        # -------------- end -----------

        # store order payment methods
        $payment->oid = $unique_oid;
        $payment->method = $data->payment;
        # -------------- end -----------

        # store order stage
        $stage->stage = "new";
        $stage->oid = $unique_oid;
        # -------------- end -----------
        # store order payment status
        $paymentStatus->status = "0";
        $paymentStatus->oid = $unique_oid;
        # store order slip image

        if (Order::where('oid', $unique_oid)->exists()) {
            return "dubliacte";
        } else {

            if ($data->payment == "bank") {
                if ($data->file('slip')) {
                    $image = $data->file('slip');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $storepath = public_path('./orders/slip');
                    $image->move($storepath, $imageName);
                    $slip->image = $imageName;
                    $slip->oid = $unique_oid;
                    $slip->save();
                }
            }
            # -------------- end -----------

            # store order products 
            if (session()->get('cart')) {

                foreach (session()->get('cart') as $items) {
                    $productdata = [
                        'oid' => $unique_oid,
                        'pid' => $items['id'],
                        'qty' => $items['qty']
                    ];
                    DB::table('orders_products')->insert($productdata);
                }
                if ($store->save() && $address->save() && $payment->save() && $stage->save() && $paymentStatus->save()) {
                    order_key::where('name', 'BO_')->update(['key' => $unique_oid]);
                    $user = Order::where('oid', $unique_oid)->get()->first();
                    $shipAddress = order_shipping_addresses::where('oid', $unique_oid)->get()->first();

                    //send email to admin and user
                    if ($user) {
                        Mail::send('component/invoiceMailView', ['user' => $user, 'ship' => $shipAddress, 'product' => session()->get('cart')], function ($message) use ($user) {
                            $message->from('wmail@byte.lk');
                            $message->to('info@byte.lk')->subject('New Order ' . '[ ' . $user->oid . ' ]');
                        });
                        Mail::send('component/invoiceMailView', ['user' => $user, 'ship' => $shipAddress, 'product' => session()->get('cart')], function ($message) use ($user) {
                            $message->from('wmail@byte.lk');
                            $message->to($user->email)->subject('byte.lk | Thanks For Your Order! ' . '[ ' . $user->oid . ' ]');
                        });
                    }

                    return view('complete')->with('invoice', ['user' => $user, 'ship' => $shipAddress]);
                } else {
                    return "somthing else";
                }
            }
        }
    }

    private function unique_oid()
    {
        return uniqid();
    }

    public function orderDetails(Request $data)
    {

        $address = order_shipping_addresses::where('oid', $data->oid)->first();
        $order = Order::where('oid', $data->oid)->first();
        $product = Orders_products::where('oid', $data->oid)->get();
        $payment = orders_payment_method::where('oid', $data->oid)->first();
        $stage = order_stage::where('oid', $data->oid)->first();
        $productInfo = [];
        foreach ($product as $item) {
            $out = product::select('name', 'price')->where('pid', $item->pid)->first();
            if ($out) {
                $out['qty'] = $item->qty;
                $productInfo[] = $out;
            }
        }
        return response()->json([
            'address' => $address,
            'order' => $order,
            'product' => $productInfo,
            'payment' => $payment,
            'stage' => $stage
        ]);
    }

    public function payhereTest()
    {
        return view('payhere-demo');
    }
    public function newCheck()
    {
        return view('newCheckout');
    }
}
