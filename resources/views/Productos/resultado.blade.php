@extends('principal')
@section('contenido')

<h4> Producto </h4>
<div>
    <br>
    <p> Id: {{$producto->id}} </p>
    <p> Nombre: {{$producto->nombreProducto}} </p> 
    <p> Categoria: {{$producto->categoria}} </p> 
    <p> Precio: {{$producto->precioProducto}} </p> 

    <a href="{{route('productos/consulta')}}"> Regresar </a>

</div>

@stop