<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Departamento;
Use App\Funcionario;

class FuncionarioController extends Controller
{


	public function index(){

	}
	public function add(){
		$departamento = Departamento::all();
		return view('admin.funcionario.add',['departamentos' => $departamento]);
	}


    public function salvar(Request $request){
    	dd($request->all());


    }
}
