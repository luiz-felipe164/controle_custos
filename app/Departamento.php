<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'id','nome',
    ];

    public function funcionario(){
    	return $this->belongsTo('App\Funcionario');
    }
}
