<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikum1 extends Controller
{
    public function homepage (){
        return view ("homepage0140");
    }
    public function artikel(){
        return view("artikel0140");
    }
    public function contactus(){
        return view("contactus0140");
    }

    }
