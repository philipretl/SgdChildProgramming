<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGDinamicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_dinamica', function (Blueprint $table) {
            $table->increments('id_G_Dinamica');
            $table->string('name_G_Dinamica');
            $table->string('description_G_Dinamica');
            $table->string('utility_G_Dinamica');
            $table->string('target_G_Dinamica');
            $table->integer('id_Strategy_Gamification')->unsigned();
            $table->timestamps();

            $table->foreign('id_Strategy_Gamification')->references
            ('id_Strategy_Gamification')->on('strategy_gamification')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_dinamica');
    }
}
