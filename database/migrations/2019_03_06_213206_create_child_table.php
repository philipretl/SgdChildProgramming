<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child', function (Blueprint $table) {
            $table->increments('id_Child');
            $table->string('name_Child');
            $table->string('grade_Child');
            $table->integer('age_Child');
            $table->integer('id_Institution')->unsigned()->nullable();
            $table->integer('id_Team')->unsigned();
            $table->timestamps();

            $table->foreign('id_Team')->references('id_Team')->on('team')->onDelete('cascade');
            $table->foreign('id_Institution')->references('id_Institution')->on('institution');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child');
    }
}
