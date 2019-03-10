<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_jugador', function (Blueprint $table) {
            $table->increments('id_G_Jugador');
            $table->enum('type_G_Jugador',
            ['explorador','triunfador','socializador','asesino'])->nullable();
            $table->integer('id_Child')->unsigned();
            $table->integer('id_Strategy_Gamification')->unsigned();
            $table->timestamps();

            $table->foreign('id_Child')->references('id_Child')->on('child');
            $table->foreign('id_Strategy_Gamification')->references
            ('id_Strategy_Gamification')->on('strategy_gamification');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_jugador');
    }
}
