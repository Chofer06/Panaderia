<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductosController extends Controller
{
    //CATEGORIAS
    public function Categoria(){
        $categorias = Categoria::all();
        return view('Productos.categorias', ['categorias' => $categorias]);
    }

    public function registrar(Request $request)
    {
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
}
