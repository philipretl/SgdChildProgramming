<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id_Team');
            $table->string('name_Team');
            $table->string('description_Team');
            $table->integer('id_Collaborative_Process')->unsigned();
            $table->timestamps();

            $table->foreign('id_Collaborative_Process')->references('id_Collaborative_Process')
            ->on('collaborative_process')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
}
