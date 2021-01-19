@extends('layouts.master')
@section('content')
    <br>
	<h1 align="center"><strong>LISTADO CATEGORIAS</strong></h1><br>
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
</table
@stop