<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    //

    function returnWorks() {
        return view('Works');
    }
}
