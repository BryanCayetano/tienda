<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productosModel;

class productosController extends Controller
{
    public function insert(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);
        $producto = new productosModel();
        $producto->name = $request->nombre;
        $producto->description = $request->descripcion;
        $producto->price = $request->precio;
        $producto->stock = $request->stock;
        $producto->nombre_categoria = $request->nombre_categoria;
        $producto->save();


        


        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de producto exitoso!",
        ]);
    }


    public function delete(Request $request)
    {
        $producto = new productosModel();
        $producto->id = $request->id;
        if ($producto = productosModel::find($producto)) {

            Request::delete();
        }
    }
}
