<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getCategoria(){
        return view('Productos/categorias');
    }

    public function getProductos(){
        return view('Productos/productos');
    }
}
