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
            $table->string('password');
            $table->string('phone_User');
            $table->enum('confirmate_User',['true','false'])->nullable()->default('true');
            $table->string('code_Confirmation_User')->nullable()->unique();
            $table->enum('type_User',['tutor_User', 'admin_User' ])->default('tutor_User');
            $table->string('imagen_User');
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
