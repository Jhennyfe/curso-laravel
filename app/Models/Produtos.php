<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    public $fillable = [
        'name' ,
        'valor',
        'quantidade',
    ];

    // Definir outros métodos e relacionamentos relevantes aqui
}
