<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    
    //Como no uso tablas de fecha modificación debo indicarlo en el modelo
    public $timestamps = false;
}
