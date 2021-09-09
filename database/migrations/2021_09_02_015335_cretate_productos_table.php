<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('descripcion');
            $table->String('ubicacion');
            $table->integer('cantidad_disponible');
            $table->float('precio');
            $table->String('imagen');
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
}
