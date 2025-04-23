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
        // O padrao é collection, mas a gente converte para array. Se usarmos colletion podemos interpretar como objeto na view.
        $personagem = Personagens::all()->toArray();

        return view("listar-personagem", ["personagens" => $personagem]);
    }

    function salvarPersonagem(Request $req){
        $personagem = new Personagens();
        $personagem->nome = $req->input("name");
        $personagem->poder = $req->input("power");
        $personagem->save();

        return view("cadastrar-personagem");
    }
}
