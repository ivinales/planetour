@extends('layouts.administrador')

@section('content')

<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
	<div class="col s12 m12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Crear categoria para trabajador</span>
				<form id="formularioCrear" method="post" action="/categoria" enctype="multipart/form-data" onsubmit="return validar_categoria();">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s4">
							<input value="" id="nombre_categoria" name="nombre_categoria" type="text" class="validate">
							<label class="active" for="nombre_categoria">Nombre categoria</label>
						</div>
						
						
					</div>

				</div>
				<div class="card-action">
					<a href="{!! asset('pais') !!}">Cancelar</a>
					<button class="btn waves-effect waves-light deep-orange" type="submit" name="action">Crear
						<i class="material-icons right">send</i>
					</button>
					<!-- <a href="javascript:{}" onclick="document.getElementById('formularioCrear').submit();">Crear</a> -->
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('select').formSelect();
	});
</script>
@endsection
