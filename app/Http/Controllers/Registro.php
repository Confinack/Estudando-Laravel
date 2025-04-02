<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class Registro extends Controller
{
    // camelCase
    function registro(){
        return view('registro');
    }

    function criarConta(Request $req){
        // dd($req->all());

        $user = new Usuario();
        $user->create($req->all());
        return view("inicio");
    }
}
