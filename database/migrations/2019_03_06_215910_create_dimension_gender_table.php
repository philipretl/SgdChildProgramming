<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_gender', function (Blueprint $table) {
            $table->increments('id_Dimension_Gender');
            $table->string('description_Dimension_Gender')->nullable();
            $table->string('concept_Gender_Dimension_Gender');
            $table->integer('id_Child_Let_Task')->unsigned();
            $table->integer('id_Practice_Gender')->unsigned();
            $table->timestamps();

            $table->foreign('id_Child_Let_Task')->references('id_Child_Let_Task')
            ->on('child_let_task')->onDelete('cascade');
            $table->foreign('id_Practice_Gender')->references('id_Practice_Gender')
            ->on('practice_gender')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dimension');
    }
}
