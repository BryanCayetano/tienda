<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\categoriaModel;

class categoriaController extends Controller
{
    public function insert(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        
        $Categoria = new categoriaModel();
        $Categoria->name = $request->name;
        $Categoria->description = $request->description;
        $Categoria->save();
        
        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de categoría exitoso!",
        ]);

    }

    public function delete(Request $request){
        $Categoria = new categoriaModel();
        $Categoria->name = $request->name;
        if ($product = categoriaModel::find($Categoria)){

            Request::delete();
        }
    }
}
