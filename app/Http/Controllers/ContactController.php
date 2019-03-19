<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class ContactController extends Controller

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function returnContact() {
        return view('Contact');
    }

}