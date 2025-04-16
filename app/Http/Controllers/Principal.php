<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function view(){
        // Helper view (Ele faz as coisas automaticas pra mim)
        return view("index");
    }
}


