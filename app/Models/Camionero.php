<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    use HasFactory;

    //uno a muchos
    public function paquete(){
        return $this->hasMany('App\Models\Paquete');
    }

    //muchos a muchos

    public function camion(){
        return $this->belongsToMany('App\Models\Camion');
    }

}
