<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTiendaCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendaCategorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();

            $table->unsignedBigInteger('tiendaId'); 
            $table->foreign('tiendaId')->references('id')->on('tiendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendaCategorias');
    }
}