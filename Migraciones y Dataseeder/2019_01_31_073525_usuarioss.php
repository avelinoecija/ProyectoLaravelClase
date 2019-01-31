<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarioss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre',45);
            $table->string('apellidos',90);
            $table->string('email',60)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('direccion',100);
            $table->boolean('admin')->default(false);
            $table->string('usuario',45);
            $table->string('clave',100);
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
