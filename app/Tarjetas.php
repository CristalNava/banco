<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjetas extends Model
{
    protected $fillable =[
        'nombre','fecha_nacimiento','numero_tarjeta','RFC'
    ];
}
