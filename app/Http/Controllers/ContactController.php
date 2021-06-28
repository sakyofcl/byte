<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function sendMail(Request $data)
    {

        $send = Mail::send('mailview', ['email' => $data->email, 'name' => $data->name, 'msg' => $data->msg, 'phone' => $data->phone], function ($message) {
            $message->from('wmail@byte.lk');
            $message->to('info@byte.lk')->subject('contact mail');
        });

        if ($send) {
            Session::flash('msg', 'somthing wrong!');
            return back();
        } else {
            Session::flash('msg', 'Message send successfully!');
            return back();
        }
    }
}
