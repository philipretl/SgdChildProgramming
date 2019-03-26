<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbstractionMechanismTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstraction_mechanism', function (Blueprint $table) {
            $table->increments('id_Abstraction_Mechanism');
            $table->string('description_Abstraction_Mechanism');
            $table->integer('id_Practice')->unsigned();
            $table->timestamps();

            $table->foreign('id_Practice')->references('id_Practice')->on('practice')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abstraction_mechanism');
    }
}
