<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reportes extends Model
{
    protected $fillable =[
        'nombre','ApeidoPaterno','ApeidoMaterno','no_tarjeta'
        
    ];
}
