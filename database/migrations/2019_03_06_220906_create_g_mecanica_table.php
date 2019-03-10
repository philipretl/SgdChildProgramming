<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGMecanicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_mecanica', function (Blueprint $table) {
            $table->increments('id_G_Mecanica');
            $table->string('name_G_Mecanica');
            $table->string('description_G_Mecanica');
            $table->string('utility_G_Mecanica');
            $table->string('target_G_Mecanica');
            $table->integer('id_G_Dinamica')->unsigned();
            $table->timestamps();

            $table->foreign('id_G_Dinamica')->references('id_G_Dinamica')
            ->on('g_dinamica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_mecanica');
    }
}
