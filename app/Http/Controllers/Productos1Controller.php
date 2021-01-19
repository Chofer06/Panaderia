<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class Productos1Controller extends Controller
{
    //PRODUCTOS
    public function Productos(){
        $productos = DB::table('productos')
                    ->join('categorias', 'categoria', '=', 'categorias.id')
                    ->get();
        return view('Productos.productos', ['productos' => $productos]);
        
    }

    public function formularioReg(){
        $categorias = Categoria::all();
        //return view('Productos.registrop', ['categorias' => $categorias]);
        return view('Productos.registrop', compact('categorias'));
    }

    public function registrar(Request $request){
        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoP');
    }

    public function form_consulta(){
        return view('Productos.consulta');
     }
 
    public function consultar(Request $request){
        $nombre = $request->input('nombrePro');
        $producto = Producto::where('nombreProducto', 'like',$nombre)->first();
        if($producto)
             return view('Productos.resultado', compact('producto'));
        else
             return view('Productos.mensaje');
 
    }
}
