<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGMentorTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_mentor_task', function (Blueprint $table) {
            $table->increments('id_G_Mentor_Task');
            $table->string('name_G_Mentor_Task');
            $table->string('description_G_Mentor_Task')->nullable();
            $table->string('target_G_Mentor_Task');
            $table->string('inputs_G_Mentor_Task');
            $table->string('outputs_G_Mentor_Task');
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
        Schema::dropIfExists('g_mentor_task');
    }
}
