<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Order;
use App\Model\orders_payment_method;
use App\Model\Orders_products;
use App\Model\product;
use App\Model\order_stage;
use App\Model\order_payment_status;

class adminOrderController extends Controller
{
    public function index()
    {
        if (session()->has('admin')) {

            #$order = Order::orderBy('date', 'DESC')->paginate(10);
            $order = DB::table('orders')->select('oid', 'date', 'status')->orderBy('date', 'DESC')->paginate(10);
            $paymentMethod = orders_payment_method::all();
            $product = product::all('pid', 'price');
            $orderProduct = Orders_products::all();
            $orderStage = order_stage::all();
            $totalNewOrder = order_stage::where('stage', 'new')->count();
            $totalAcceptedOrder = order_stage::where('stage', 'accept')->count();
            $totalCompleteOrder = order_stage::where('stage', 'complete')->count();
            $orderPaymentStatus = order_payment_status::all();
            #return var_dump($paymentMethod);
            return view('/admin/order/orders', [
                'order' => $order,
                'paymentMethod' => $paymentMethod,
                'product' => $product,
                'orderProduct' => $orderProduct,
                'orderStage' => $orderStage,
                'totalNewOrder' => $totalNewOrder,
                'totalAcceptedOrder' => $totalAcceptedOrder,
                'totalCompleteOrder' => $totalCompleteOrder,
                'orderPaymentStatus' => $orderPaymentStatus
            ]);
        } else {
            return redirect('/admin');
        }
    }

    public function updateOrderStage(Request $data)
    {
        if ($data->v == "new" || $data->v == "accept" || $data->v == "cancel" || $data->v == "complete") {

            if ($data->v == "complete") {
                if (Order::where([['oid', "=", $data->oid], ['status', "=", "delivered"]])->exists() && order_payment_status::where([['oid', "=", $data->oid], ['status', "=", "1"]])->exists()) {
                    $updateStage = order_stage::where('oid', $data->oid)->update(['stage' => $data->v]);
                    if ($updateStage) {
                        return back();
                    }
                } else {
                    return back();
                }
            } else if ($data->v == "cancel") {
                $updateStage = order_stage::where('oid', $data->oid)->update(['stage' => $data->v]);
                if ($updateStage) {
                    return back();
                }
            } else if ($data->v == "accept") {
                $updateStage = order_stage::where('oid', $data->oid)->update(['stage' => $data->v]);
                return back();
            }
        } else {
            return back();
        }
    }


    public function updateOrderStatus(Request $data)
    {
        $updateStatus = Order::where('oid', $data->oid)->update(['status' => $data->status]);
        if ($updateStatus) {
            return response()->json(['status' => 'yes']);
        } else {
            return response()->json(['status' => 'no']);
        }
    }

    public function updateOrderPaymentStatus(Request $data)
    {
        if ($data->status == "0" || $data->status == "1") {
            if ($data->status == "0") {
                $updatePaymentStatus = order_payment_status::where('oid', $data->oid)->update(['status' => $data->status]);
                if ($updatePaymentStatus) {
                    return response()->json(['status' => 'yes']);
                } else {
                    return response()->json(['status' => 'no']);
                }
            }

            if ($data->status == "1") {
                $updatePaymentStatus = order_payment_status::where('oid', $data->oid)->update(['status' => $data->status]);
                if ($updatePaymentStatus) {
                    return response()->json(['status' => 'yes']);
                } else {
                    return response()->json(['status' => 'no']);
                }
            }
        }
    }
}
