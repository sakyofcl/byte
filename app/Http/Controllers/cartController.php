<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\product;

class cartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function addcart(Request $data)
    {

        $product = product::find($data->pid, ['pid', 'name', 'price', 'image']);

        $cart = session()->get('cart');

        if (!$cart) {
            if ($product) {
                $cart = [
                    $data->pid => [
                        "name" => $product->name,
                        "price" => $product->price,
                        "photo" => $product->image,
                        "qty" => $data->qty,
                        "id" => $product->pid
                    ]
                ];
                session()->put('cart', $cart);
            }
        }

        #if cart alrety exicets we can update quenty
        if (!isset($cart[$data->pid])) {
            $cart[$data->pid] = [
                "name" => $product->name,
                "price" => $product->price,
                "photo" => $product->image,
                "qty" => $data->qty,
                "id" => $product->pid,
            ];
            session()->put('cart', $cart);
        } else {
            $cart[$data->pid] = [
                "name" => $product->name,
                "price" => $product->price,
                "photo" => $product->image,
                "qty" => $data->qty,
                "id" => $product->pid,
            ];
            session()->put('cart', $cart);
        }

        switch ($data->type) {
            case 'buy':
                return redirect('/checkout');
            case 'cart':
                return back();
        }
    }

    public function clearCart()
    {
        $cart = session()->get('cart');
        if ($cart) {
            $cart = [];
            session()->put('cart', $cart);
            return back();
        }
    }
    public function removeItem($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return back();
    }
    public function update(Request $data)
    {
        $cart = session()->get('cart');

        if (isset($cart[$data->pid])) {
            $cart[$data->pid]['qty'] = $data->quantity;
            session()->put('cart', $cart);
        }
        return back();
    }
    public function productAddCart(Request $data)
    {
        $product = product::find($data->pid, ['pid', 'name', 'price', 'image']);

        $cart = session()->get('cart');

        if (!$cart) {
            if ($product) {
                $cart = [
                    $data->pid => [
                        "name" => $product->name,
                        "price" => $product->price,
                        "photo" => $product->image,
                        "qty" => $data->qty,
                        "id" => $product->pid
                    ]
                ];
                session()->put('cart', $cart);
                return redirect('/checkout');
            } else {
                return back();
            }
        }

        #if cart alrety exicets we can update quenty
        if (isset($cart[$data->pid])) {
            return redirect('/checkout');
        } else {
            $cart[$data->pid] = [
                "name" => $product->name,
                "price" => $product->price,
                "photo" => $product->image,
                "qty" => $data->qty,
                "id" => $product->pid,
            ];
            session()->put('cart', $cart);
            return redirect('/checkout');
        }

        session()->forget('cart');
    }
}
