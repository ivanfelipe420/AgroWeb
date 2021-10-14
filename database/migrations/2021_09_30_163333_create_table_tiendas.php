<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTiendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombretieda');
            $table->string('nombreDueño');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->timestamps();
            $table->unsignedBigInteger('idtiendausuario'); 
            $table->foreign('idtiendausuario')->references('id')->on('users');
           // $table->foreign('nombreDueño')->references('name')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
}
