<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id_Role');
            $table->string('name_Role');
            $table->string('description_Role');
            $table->string('type_Role');
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
        Schema::dropIfExists('role');
    }
}
