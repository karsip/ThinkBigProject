<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function returnContact() {
        return view('Contact');
    }

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
