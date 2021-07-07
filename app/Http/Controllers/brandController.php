<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\product_brand;

class brandController extends Controller
{
    public function addBrand(Request $data)

    {
        $store = new product_brand;
        if ($data->name) {
            $store->brand = $data->name;
            $store->save();
        }
        return back();
    }
}
