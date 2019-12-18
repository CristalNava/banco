<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    //
    protected $fillable =[
        'numero_cliente','nombre','fecha_nacimiento','RFC'
    ];
}
