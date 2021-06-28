<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\sub_category;
use App\Model\category;
use App\Model\product;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {
        
        $subcat = sub_category::all();
        $manicatnav=category::all();
        session()->put('main',$manicatnav);
        session()->put('sub',$subcat);
        $recentProduct=product::orderBy('created_at','DESC')->get()->take(30);
        return view('home')->with('category', ['sub' =>  $subcat,'main'=>$manicatnav,'recentProduct'=>$recentProduct]);
       
    }
}