<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThinkletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thinklet', function (Blueprint $table) {
            $table->increments('id_Thinklet');
            $table->string('name_Thinklet');
            $table->string('description_Thinklet');
            $table->string('inputs_Thinklet');
            $table->string('outputs_Thinklet');
            $table->string('steps_Thinklet');
            $table->integer('id_Collaborative_Process')->unsigned();
            $table->timestamps();

            $table->foreign('id_Collaborative_Process')
            ->references('id_Collaborative_Process')->on('collaborative_process');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thinklet');
    }
}
