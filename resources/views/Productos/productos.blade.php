@extends('layouts.master')
@section('content')
    <br>
	<h1 align="center"><strong>PRODUCTOS</strong></h1><br>
	<div class="container">
		<div class="row">
			@foreach($productos as $p)
			<div class="col-md-4">
				<div class="card" style="width: 15rem;">
					<img src='{{url("/imagenes/$p->fotoProducto")}}' class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> {{ $p->nombreProducto}} </h5>
						<p class="card-text"> Cantidad: {{$p->cantidadProducto}} </p>
						<p class="card-text"> Precio: {{$p->precioProducto}} </p>
						<p class="card-text"> Categoria: {{$p->nombreCategoria}} </p>
					</div>
				</div><br>
			</div>
			@endforeach
		</div>
	</div><br><br>
	<h3 align="center"><strong>Agregar Nuevo Producto</strong></h3><br>
	<div class="container">
		<div class="row">
		<div class="col-sm-4">
				<form action="{{url('productos')}}" enctype="multipart/form-data" method="POST">
				@csrf
					<div class="md-form">
						<label><strong>NOMBRE</strong></label>
	            		<input required type="text" class="form-control input-sm" id="nombre" name="nombre">
	        		</div>
					<div class="md-form">
						<label><strong>CANTIDAD</strong></label>
	            		<input required type="text" class="form-control input-sm" id="cantidad" name="cantidad">
	        		</div>
					<div class="md-form">
						<label><strong>PRECIO</strong></label>
	            		<input required type="text" class="form-control input-sm" id="precio" name="precio">
	        		</div>
					<div class="md-form">
						<label><strong>IMAGEN</strong></label>
	            		<input required type="file" class="form-control-file" id="imagen" name="imagen">
	        		</div><br>
			
					<label for="productos">CATEGORIA</label>
					<select class="custom-select" id="categorias" name="categorias">
						@foreach($productos as $p)
            				<option value="{{$p->id}}">{{$p->nombreCategoria}}</option>
            			@endforeach
        			</select>
        			<br><br>
					<button type="submit" class="btn btn-success">Registrar</button>
        			<button type="reset" class="btn btn-warning">Limpiar</button>
        			<button type="button" class="btn btn-danger">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
@stop