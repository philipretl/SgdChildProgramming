<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_gender', function (Blueprint $table) {
            $table->increments('id_Practice_Gender');
            $table->string('name_Practice_Gender');
            $table->string('description_Practice_Gender');
            $table->string('inputs_Practice_Gender');
            $table->string('outputs_Practice_Gender');
            $table->string('orientation_Practice_Gender');
            $table->string('indicators_Problem_Practice_Gender');
            $table->integer('id_Child_Let_Task')->unsigned();
            $table->timestamps();

            $table->foreign('id_Child_Let_Task')->references('id_Child_Let_Task')
            ->on('child_let_task')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice_gender');
    }
}
