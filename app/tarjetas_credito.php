<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarjetas_credito extends Model
{
    protected $fillable =[
        'nombre','fecha_nacimiento','direccion','telefono'
    ];
}
