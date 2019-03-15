<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension', function (Blueprint $table) {
            $table->increments('id_Dimension');
            $table->string('description_Dimension');
            $table->string('concept_Gender_Dimension');
            $table->integer('id_Child_Let_Task')->unsigned();
            $table->timestamps();

            $table->foreign('id_Child_Let_Task')->references('id_Child_Let_Task')
            ->on('child_let_task');
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
