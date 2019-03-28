<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeSmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_smt', function (Blueprint $table) {
            $table->increments('id_Practice_Smt');
            $table->string('name_Practice_Smt')->nullable();
            $table->string('description_Practice_Smt')->nullable();
            $table->string('inputs_Practice_Smt');
            $table->string('outputs_Practice_Smt');
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
        Schema::dropIfExists('practice_smt');
    }
}
