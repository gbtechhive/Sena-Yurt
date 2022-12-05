<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seeMoreLatestProduct extends Controller
{
    function show_latestProduct (){
        return view('see_LatestProduct');
    }
}
