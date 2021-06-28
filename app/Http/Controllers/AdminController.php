<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }
    public function login(Request $data)
    {
        $admin = admin::where(['email' => $data->email])->first();
        
        if ($admin) {
            if (Hash::check($data->password, $admin->password)) {
                session()->put('admin',$admin->email);
                session()->put('adminname',$admin->name);
                return redirect('admin-dashbord');
              
            } else {
                return redirect('/admin');
            }
        }
    }
    public function adminDashbord(){
        if(session()->has('admin')){
            return view('admin/dashboard');
        }
        else{
            return redirect('/admin');
        }
    }
    public function adminOut(){
        if(session()->has('admin')){
            session()->pull('admin');#it will delete the key
        }
        return redirect('/');
    }
}
