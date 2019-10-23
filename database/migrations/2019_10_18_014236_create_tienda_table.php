<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->text('direccion', 1000);
            $table->string('logo', 100);
            $table->string('telefono',9);
            $table->string('web',100);
            $table->string('descripcion_es',1000);
            $table->string('descripcion_en',1000);
            $table->string('descripcion_eus',1000);
            $table->string('urlVideo',1000);
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
