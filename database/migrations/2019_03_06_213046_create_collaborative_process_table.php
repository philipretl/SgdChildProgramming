<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborativeProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborative_process', function (Blueprint $table) {
            $table->increments('id_Collaborative_Process');
            $table->string('name_Collaborative_Process');
            $table->string('goal_Collaborative_Process');
            $table->integer('id_User')->unsigned();
            $table->timestamps();

            $table->foreign('id_User')->references('id_User')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborative_process');
    }
}
