<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_User');
            $table->string('name_User');
            $table->string('email_User')->unique();
            $table->string('password_User');
            $table->string('phone_User');
            $table->enum('confirmate',['true','false'])->nullable()->default('false');
            $table->string('codeConfirmation_User')->nullable()->unique();
            $table->enum('tipo',['tutor', 'admin' ])->default('tutor');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
