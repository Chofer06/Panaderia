@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
		<h1 align="left"><strong>VENTA DE PRODUCTOS</strong></h1><br>
		<div class="row">
			<div class="col-sm-4">
				<span class="btn btn-danger" id="ventaProductosBtn">Vender Productos</span>
				<span class="btn btn-primary" id="ventasHechasBtn">Ventas Hechas</span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div id="ventaProductos"></div>
				<div id="ventasHechas"></div>
			</div>
		</div>
	</div>
@stop