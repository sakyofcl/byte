<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\product;

class cartController extends Controller
{
    public function index(){
       return view('cart');
    }

    public function addcart($id){
        
        $product=product::find($id, ['pid', 'name','price','image']);
        
        $cart=session()->get('cart');
       
        if(!$cart){
            if($product){
                $cart=[
                    $id=>[
                        "name"=>$product->name,
                        "price"=>$product->price,
                        "photo"=>$product->image,
                        "qty"=>1,
                        "id"=>$product->pid
                    ]
                ];
                session()->put('cart',$cart);
                return back();
            }
            else{
                return "no product avilable";
            }
        }
        
        #if cart alrety exicets we can update quenty
        if(isset($cart[$id])){
            return back();
           
        }
        else{
            $cart[$id]=[
                "name"=>$product->name,
                "price"=>$product->price,
                "photo"=>$product->image,
                "qty"=>1,
                "id"=>$product->pid,
            ];
            session()->put('cart',$cart);
            return back();
        }

        session()->forget('cart');
        
        
        #return view('cart');
        #session()->put('cart',array('sakeen','add'));

    }

    public function clearCart(){
        $cart=session()->get('cart');
        if($cart){
            $cart=[];
            session()->put('cart',$cart);
            return back();
        }
    }
    public function removeItem($id){
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return back();
    }
    public function update(Request $data){
        $cart=session()->get('cart');
        
        if(isset($cart[$data->pid])){
            $cart[$data->pid]['qty']=$data->quantity;
            session()->put('cart',$cart);
        }
        return back();
    }
}
