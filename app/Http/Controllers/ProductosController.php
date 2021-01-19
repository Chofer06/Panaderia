<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller
{
    //CATEGORIAS
    public function Categoria(){
        $categorias = Categoria::all();
        return view('Productos.categorias', ['categorias' => $categorias]);


    }

    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
        $category = new Categoria();
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listado');
    }

    public function actualizar()
    {
        return view('inventario.categorias.form_actualiza');
    }

    public function eliminar()
    {
        return view('inventario.categorias.eliminar');
    }


    //PRODUCTOS
    public function Productos(){
        $productos = DB::table('productos')
                    ->join('categorias', 'categoria', '=', 'categorias.id')
                    ->get();
        return view('Productos.productos', ['productos' => $productos]);
    }
}
