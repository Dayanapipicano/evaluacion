<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;



    //uno a muchos
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }


    
}
