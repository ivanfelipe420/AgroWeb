<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCarritos extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUsuario'); 
            $table->unsignedBigInteger('idProducto');
            $table->timestamps();


            $table->foreign('idUsuario')->references('idtiendausuario')->on('tiendas');
            $table->foreign('idProducto')->references('id')->on('productos');
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
