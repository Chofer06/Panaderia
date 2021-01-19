@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
		<h1 align="center"><strong>CATEGORIAS</strong></h1><br>
		<div class="row">
			<div class="col-sm-4">
				<form id="frmCategorias">
					<div class="md-form">
						<label><strong>CATEGORIA</strong></label>
	            		<input required type="text" class="form-control input-sm" id="categoria" name="categoria">
	        		</div><br>
	        		<span class="btn btn-primary" id="btnCategoria">AGREGAR</span>
				</form>
			</div>
			<div class="col-sm-8">
				<div id="tablaCategoriaLoad"></div>
			</div>
		</div>
	</div>
@stop