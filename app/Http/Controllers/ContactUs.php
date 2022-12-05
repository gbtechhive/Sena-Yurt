<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    function ContactShow(){
        return view('contact');
    }
}
