<?php

namespace App\Http\Controllers;
use App\Models\productosModel;
use Illuminate\Http\Request;

class carritoController extends Controller
{
    public function shop()
    {
        $products = productosModel::all();
        dd($products);
        return view('shop')->withTitle('TIENDA')->with(['productos' => $products]);
    }

    public function cart()  {
        $cartCollection = carritoController::getContent();
        dd($cartCollection);
        return view('cart')->withTitle('TIENDA')->with(['carrito' => $cartCollection]);;
    }

}
