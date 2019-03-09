<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilitator', function (Blueprint $table) {
            $table->increments('id_Facilitator');
            $table->string('description_Facilitator');
            $table->integer('id_Collaborative_Process')->unsigned();
            $table->timestamps();

            $table->foreign('id_Collaborative_Process')->references('id_Collaborative_Process')->on('collaborative_process')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilitator');
    }
}
