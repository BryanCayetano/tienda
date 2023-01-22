<?php

namespace Database\Seeders;

use App\Models\categoriaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class generadorCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        categoriaModel::create([
            'id_categoria' => 1,
            'nombre' => 'consumibles',
            'descripcion' => 'consumible',
        ]);
    }
}
