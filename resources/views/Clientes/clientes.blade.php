@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
		<h1 align="center"><strong>ADMINISTRAR CLIENTES</strong></h1><br>
		<div class="row">
			<div class="col-sm-4">
				<form id="frmClientes">
					<div class="md-form">
						<label><strong>NOMBRE</strong></label>
	            		<input required type="text" class="form-control input-sm" id="nombre" name="nombre">
	        		</div>
	        		<div class="md-form">
	        			<label><strong>APELLIDO</strong></label>
	            		<input required type="text" class="form-control input-sm" id="apellido" name="apellido">
	        		</div>
	        		<div class="md-form">
	        			<label><strong>DIRECCION</strong></label>
	            		<input required type="text" class="form-control input-sm" id="direccion" name="direccion">
	        		</div>
	        		<div class="md-form">
	        			<label><strong>EMAIL</strong></label>
	            		<input required type="text" class="form-control input-sm" id="email" name="email">
	        		</div>
	        		<div class="md-form">
	        			<label><strong>TELEFONO</strong></label>
	            		<input required type="text" class="form-control input-sm" id="telefono" name="telefono">
	        		</div><br>
					<span class="btn btn-primary" id="btnCliente">REGISTRAR</span>
				</form>
			</div>
			<div class="col-sm-8">
				<div id="tablaClientesLoad"></div>
			</div>
		</div>
	</div>
@stop