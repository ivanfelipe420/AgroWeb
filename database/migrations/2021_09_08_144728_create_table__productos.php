<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductos extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePro');
            $table->string('descripcionPro')->nullable();
            $table->string('unidadPro');
            $table->integer('precioPro');
            $table->integer('cantidadPro');
            $table->boolean('promocion')->nullable();
            $table->integer('precioPromo')->nullable();
            $table->String('imagen');
            $table->timestamps();
            
            $table->unsignedBigInteger('categorias_id'); 
            $table->foreign('categorias_id')->references('id')->on('categorias');
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
