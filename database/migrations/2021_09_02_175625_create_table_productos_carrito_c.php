<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductosCarritoC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_productos_carrito_c', function (Blueprint $table) {
            $table->integer('productos_id')->unsigned();
            $table->integer('carritoCompras_id')->unsigned();
            
            $table->foreign('productos_id')->references('id')->on('productos');
            $table->foreign('carritoCompras_id')->references('id')->on('carritoCompras');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_productos_carrito_c');
        
    }
}
