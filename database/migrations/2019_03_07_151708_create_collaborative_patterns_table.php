<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborativePatternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborative_patterns', function (Blueprint $table) {
            $table->increments('id_Collaborative_Patterns');
            $table->string('name_Collaborative_Patterns');
            $table->string('description_Collaborative_Patterns');
            $table->integer('id_Thinklet')->unsigned();
            $table->timestamps();

            $table->foreign('id_Thinklet')->references('id_Thinklet')
            ->on('thinklet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborative_patterns');
    }
}
