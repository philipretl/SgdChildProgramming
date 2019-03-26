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
            $table->integer('age_Child');
            $table->string('student_Code_Child');
            $table->integer('id_Institution')->unsigned()->nullable();
            $table->integer('id_Grade')->unsigned();
            $table->timestamps();

            $table->foreign('id_Grade')->references('id_Grade')->on('grade')->onDelete('cascade');
            $table->foreign('id_Institution')->references('id_Institution')
            ->on('institution')->onDelete('cascade');
        });
        Schema::create('child_team', function (Blueprint $table) {
            $table->increments('id_Child_Team');
            $table->integer('id_Child')->unsigned();
            $table->integer('id_Team')->unsigned();
            $table->timestamps();

            $table->foreign('id_Team')->references('id_Team')->on('team')->onDelete('cascade');
            $table->foreign('id_Child')->references('id_Child')->on('child')->onDelete('cascade');

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
        Schema::dropIfExists('child_team');
    }
}
