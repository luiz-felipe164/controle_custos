<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
	protected $fillable = [
        'nome', 'id_dep',
    ];
    
    public function departamentos(){
    	return $this->HasMany('App\Departamento','id_dep');
    }
}
