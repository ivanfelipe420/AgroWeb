<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('aromaticas');
            $table->string('cereales');
            $table->string('especies');
            $table->string('frutas');
            $table->string('grano');
            $table->string('hortalizas');
            $table->string('huevos');
            $table->string('lacteos');
            $table->string('legumbres');
            $table->string('platano procesados');
            $table->string('quesos');
            $table->string('vegetales');
            $table->string('verduras');
            $table->string('tuberculos');
            $table->string('promociones');
            $table->string('medicinales');
            $table->string('semillas');
            $table->string('carnes');
            $table->string('flores');
            $table->bigInteger('productos_id');
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
        Schema::dropIfExists('table_categoria');
    }
}
