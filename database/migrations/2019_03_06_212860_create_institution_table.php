<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution', function (Blueprint $table) {
            $table->increments('id_Institution');
            $table->string('name_Institution');
            $table->string('address_Institution')->nullable();
            $table->string('phone_Institution')->nullable();
            $table->string('code_Institution')->nullable();
            $table->integer('id_User')->unsigned();
            $table->timestamps();

            $table->foreign('id_User')->references('id_User')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution');
    }
}
