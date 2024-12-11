<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id('approval_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->timestamp('approval_date')->nullable();
            $table->enum('status', ['approved', 'rejected'])->nullable();

            $table->foreign('request_id')->references('request_id')->on('requests');
            $table->foreign('supervisor_id')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('approvals', function (Blueprint $table) {
            $table->dropForeign(['request_id']);
            $table->dropForeign(['supervisor_id']);
        });
        Schema::dropIfExists('approvals');
    }
}
