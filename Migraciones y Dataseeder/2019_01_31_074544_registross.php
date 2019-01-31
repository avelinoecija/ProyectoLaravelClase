<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registross extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->unsignedInteger('id_pedido');
            $table->unsignedInteger('id_juego');
            $table->unsignedInteger('id_usuario');
            $table->integer('cantidad');
	    $table->timestamps();
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onUpdate('cascade');
            $table->foreign('id_juego')->references('id_juego')->on('juegos')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
