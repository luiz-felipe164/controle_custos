@extends('layout.site')

@section('titulo','Sistema de Controle de Custos')

@section('conteudo')
	<div class="container">
		<h3 style="text-align: center;">O que deseja fazer?</h3>

		<div class="col-md-2 center"></div>
			<div class="col-md-8 center">
				<a href="{{route('admin.funcionario.add')}}" class="btn btn-primary">Cadastrar Funcionário</a>
				<a href="#" class="btn btn-primary">Cadastar Departamento</a>
				<a href="#" class="btn btn-primary">Cadastrar Movimentação</a>
			</div>
		<div class="col-md-2 center"></div>
	</div>

@endsection