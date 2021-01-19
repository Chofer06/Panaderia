@extends('layouts.master')
@section('content')
    <br>
    <h3 align="center"><strong>Realizar Consulta</strong></h3><br>
    <form action="{{url('consulta')}}" method="POST">
		@csrf
		<div class="md-form">
			<label><strong>NOMBRE</strong></label>
	        <input required type="text" class="form-control input-sm" id="nombrePro" name="nombrePro">
	    </div>
    </form>
    <br><br>
	<button type="submit" class="btn btn-warning">Consultar</button>
@stop