<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrategyGamificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategy_gamification', function (Blueprint $table) {
            $table->increments('id_Strategy_Gamification');
            $table->string('name_Strategy_Gamification');
            $table->string('description_Strategy_Gamification');
            $table->string('targe_Strategy_Gamification');
            $table->integer('id_G_Mentor_Task')->unsigned();
            $table->timestamps();

            $table->foreign('id_G_Mentor_Task')->references('id_G_Mentor_Task')->on('g_mentor_task');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strategy_gamification');
    }
}
