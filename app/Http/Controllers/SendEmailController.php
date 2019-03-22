<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends BaseController
{
    function index(){

        return view('Contact');
    }

    function send(Request $request){

        $this->validate($request, [
            'name'      =>      'required',
            'email'     =>      'required|email',
            'message'   =>      'required'
        ]);


        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('karolis.sipavicius1@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
    }
}
