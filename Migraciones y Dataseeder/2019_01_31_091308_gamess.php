<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gamess extends Migration
{

	protected $primaryKey='id_game';
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
         Schema::create('games', function (Blueprint $table) {
            $table->increments('id_game');
            $table->string('name',45);
            $table->decimal('price',6,2);
            $table->string('category',45);
            $table->string('image',100);
	    $table->string('video');
            $table->text('description');
            $table->date('launch');
            $table->string('creator');
            $table->string('editor');
            $table->string('key',100);
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
        Schema::dropIfExists('games');
    }
}
