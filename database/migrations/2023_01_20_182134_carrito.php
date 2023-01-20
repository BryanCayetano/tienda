<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->string('nombre_producto');
            $table->string('nombre_categoria');
            $table->integer('precio');
            $table->string('descripcion');
            $table->integer('stock')->default(0);
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
