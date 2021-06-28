<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Order;
use App\Model\Ship_address;
use App\Model\Orders_products;
use App\Model\product;
use App\Model\Payment_methods;
use App\Model\Orders_payment;
use App\Model\Orders_slip;
use App\Model\order_key;

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
        $address = new Ship_address;
        $products = new Orders_products;
        $payment = new Orders_payment;
        $slip = new Orders_slip;

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
        $store->date = date("Y-m-d");
        $store->status = 0;
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
        $payment->payment_id = $data->payment;
        # -------------- end -----------

        # store order slip image

        if (Order::where('oid', $unique_oid)->exists()) {
            return back();
        } else {

            if ($data->payment == 2) {
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
                if ($store->save() && $address->save() && $payment->save()) {
                    order_key::where('name', 'BO_')->update(['key' => $unique_oid]);
                    $user = Order::where('oid', $unique_oid)->get();
                    $shipAddress = Ship_address::where('oid', $unique_oid)->get();
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
}
