<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable =[
        'no_cliente','nombre','fecha_nacimiento','Direccion','Telefono'
        
    ];
}
