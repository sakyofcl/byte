<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminOrderController extends Controller
{
    public function index(){
        if(session()->has('admin')){
            
            return view('/admin/order/orders');
        }
        else{
            return redirect('/admin');
        }
    }
}
