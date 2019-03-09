<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildLetTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_let_task', function (Blueprint $table) {
            $table->increments('id_Child_Let_Task');
            $table->string('name_Child_Let_Task');
            $table->string('description_Child_Let_Task');
            $table->string('input_Child_Let_Task');
            $table->string('output_Child_Let_Task');
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
        Schema::dropIfExists('child_let_task');
    }
}
