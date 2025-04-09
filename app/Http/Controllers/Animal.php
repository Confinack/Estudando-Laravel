<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;

class Animal extends Controller
{
    // camelCase
    function animal(){
        return view('animal');
    }

    function getAnimais(){
        // Collection -> Array de objetos
        $animais = Animals()::all;
    }

    function addAnimal(Request $req){
        $animal = new Animals();
        $animal->create($req->all());

        return view("inicio");
    }
}
