<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productos1Controller extends Controller
{
    //PRODUCTOS
    public function Productos(){
        $categoria = Categoria::all();
        return view('Productos.productos', ['productos' => $categoria]);
        
        $productos = DB::table('productos')
                    ->join('categorias', 'categoria', '=', 'categorias.id')
                    ->get();
        return view('Productos.productos', ['productos' => $productos]);
        
    }

    public function registrarp(Request $request){
        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoP');
        
    }
}
