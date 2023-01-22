<?php

namespace Database\Seeders;

use App\Models\productosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class generadorProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productosModel::create([
            'nombre' => 'botella de agua',
            'precio' => 1,
            'descripcion' => 'agua mineralizada embotellada',
            'stock' => 50,
            'nombre_categoria' => 'consumibles'
        ]);

        productosModel::create([
            'nombre' => 'jamón salado',
            'precio' => 49,
            'descripcion' => 'pata de jamón industrializada',
            'stock' => 20,
            'nombre_categoria' => 'consumibles'
        ]);
    }
}
