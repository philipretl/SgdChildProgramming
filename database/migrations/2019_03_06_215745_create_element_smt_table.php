<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementSmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_smt', function (Blueprint $table) {
            $table->increments('id_Element_Smt');
            $table->string('description_Element_Smt')->nullable();
            $table->integer('id_Practice_Smt')->unsigned();
            $table->timestamps();

            $table->foreign('id_Practice_Smt')->references('id_Practice_Smt')
            ->on('practice_smt')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('element_smt');
    }
}
