<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{   
    protected $guarded = [];// ignoran campos protegidosasi como el token  ... el nombre de la variable tal cual
    //protected $fillable = ['email','descripcion'];// esta es otra alternativa peroo aqui se especifica ps
    use HasFactory;
}
