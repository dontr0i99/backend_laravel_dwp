<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 50);
            $table->string('email', 100);
            $table->string('password');
            $table->enum('role', ['requester', 'purchaser', 'supervisor']);
            $table->string('division', 100)->nullable();    
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
