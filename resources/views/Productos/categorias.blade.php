@extends('layouts.master')
@section('content')
    <br>
	<h1 align="center"><strong>CATEGORIAS</strong></h1><br>
	<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre Categoria</th>
					<th scope="col">Descripción </th>
				</tr>
			</thead>
		<tbody>
			@foreach($categorias as $c)
					<tr>
						<td> {{ $c->id }} </td>
						<td> {{ $c->nombreCategoria }} </td>
						<td> {{ $c->descripcion }}</td>
					</tr>
				
			@endforeach
		</tbody>
	</table><br><br>
	<h3 align="center"><strong>Agregar Nueva Categoria</strong></h3><br>
    <div class="container">
		<div class="row">
			<div class="col-sm-4">
				<form action="{{url('categoria')}}" method="POST">
					@csrf
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">*.*</span>
						</div>
						<input type="text" class="form-control" placeholder="Nombre Categoria" aria-label="nombre" aria-describedby="basic-addon1" id="nombreCat" name="nombreCat" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">*.*</span>
						</div>
						<input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="descripcionCat" name="descripcionCat" required>
					</div>
					<button type="submit" class="btn btn-primary">AGREGAR</button>
				</form>
			</div>
			<div class="col-sm-8">
				<div id="tablaCategoriaLoad"></div>
			</div>
		</div>
	</div>
@stop