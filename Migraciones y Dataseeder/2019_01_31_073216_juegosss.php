<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Juegosss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->increments('id_juego');
            $table->string('nombre',45);
            $table->decimal('precio',6,2);
            $table->string('categoria',45);
            $table->string('imagen',100);
	    $table->string('video');
            $table->text('descripcion');
            $table->string('clave_juego',100);
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
        Schema::dropIfExists('juegos');
    }
}
