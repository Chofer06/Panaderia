@extends('layouts.master')
@section('content')
    <br>
    <h3 align="center"><strong>Agregar Nuevo Producto</strong></h3><br>
	<form action="{{url('consulta')}}" method="POST">
		@csrf
		<div class="md-form">
			<label><strong>NOMBRE</strong></label>
	        <input required type="text" class="form-control input-sm" id="nombrePro" name="nombrePro">
	    </div>
		<div class="md-form">
			<label><strong>CANTIDAD</strong></label>
	        <input required type="text" class="form-control input-sm" id="cantidadPro" name="cantidadPro">
	    </div>
		<div class="md-form">
			<label><strong>PRECIO</strong></label>
	        <input required type="text" class="form-control input-sm" id="precioPro" name="precioPro">
	    </div>
		<div class="md-form">
			<label><strong>IMAGEN</strong></label>
	        <input required type="file" class="form-control-file" id="fotoPro" name="fotoPro">
	    </div><br>
			
		<label for="productos">CATEGORIA</label>
		<select class="custom-select" id="categorias" name="categorias">
			@foreach($categorias as $c)
                <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
            @endforeach
        </select>
        <br><br>
		<button type="submit" class="btn btn-success">Registrar</button>
        <button type="reset" class="btn btn-warning">Limpiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
	</form>
@stop