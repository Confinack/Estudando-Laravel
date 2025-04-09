<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;

    protected $table = "animal";
    // Sem o fillable o método create nao funciona, somente o save funciona sem o fillable
    protected $fillable = ["nome", "cor", "peso", "idade", "especie", "raca"];

}
