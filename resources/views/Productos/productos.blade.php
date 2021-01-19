@extends('layouts.master')
@section('content')
    <br>
	<div class="container">
		<h1 align="center"><strong>PRODUCTOS</strong></h1><br>
		<div class="row">
			<div class="col-sm-4">
				<form id="frmArticulos" enctype="multipart/form-data">
					<div class="md-form">
						<label><strong>CATEGORIA</strong></label>
	            		<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
	            			<option value="A">Selecciona Categoria</option>
	            			<!--?php while ($ver=mysqli_fetch_row($result)): ?>
	            				<option value="<!--?php echo $ver[0] ?-->"><!--?php echo $ver[1]; ?--></option>
	            			<!--?php endwhile; ?-->
	            		</select>
	        	    </div>
	        		<div class="md-form">
						<label><strong>NOMBRE</strong></label>
	            		<input required type="text" class="form-control input-sm" id="nombre" name="nombre">
	        		</div>
	        		<div class="md-form">
						<label><strong>DESCRIPCION</strong></label>
	            		<input required type="text" class="form-control input-sm" id="descripcion" name="descripcion">
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
	            		<input required type="file" class="form-control input-sm" id="imagen" name="imagen">
	        		</div><br>
	        		<span class="btn btn-primary" id="btnArticulo">AGREGAR</span>
				</form>
			</div>
			<div class="col-sm-8">
				<div id="tablaArticulosLoad"></div>
			</div>
		</div>
	</div>
@stop