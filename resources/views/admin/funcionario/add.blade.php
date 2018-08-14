
@extends('layout.site')

@section('titulo','Adicionar Funcionario')

@section('conteudo')
	<div class="container">
		<h3 style="text-align: center;">Preencha os dados do Funcionário</h3>

		<div class="row">
			<div class="col-md-12 center">

			<form action="{{ route('admin.funcionario.salvar') }}" method="POST">
			  {{ csrf_field() }}

			  <div class="form-group">
			    <label for="nome">Nome Completo</label>
			    <input type="text" class="form-control" id="nome_func" maxlength="200" required="" value="{{isset($registro->nome) ? $registro->nome : ''}}">
			  </div>

			  <div class="form-group">
			  	<label for="departamento">Selecione o Departamento: </label>
			  	<select class="form-control">
			  		<option selected>Escolha...</option>
			  		@foreach($departamentos as $departamento)
			  		<option value="{{$departamento->id}}">{{ $departamento->nome }}</option>
			  		@endforeach
			  	</select>
			  </div>

			  <br>
			  <button id="btn_salvar" class="btn btn-warning">Salvar</button>
			  
			</form>

			</div>
		</div>
		
	</div>

@endsection