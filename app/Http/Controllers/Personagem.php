<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;

class Personagem extends Controller
{
    function view(){
        return view("cadastrar-personagem");
    }

    function listarPersonagem(){
        return view("listar-personagem");
    }

    function salvarPersonagem(Request $req){
        $personagem = new Personagens();
        $personagem = $dados->all();
        $personagem->save();
    }
}
