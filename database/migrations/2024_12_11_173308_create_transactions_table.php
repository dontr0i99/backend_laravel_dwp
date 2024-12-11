<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('vendor_id');
            $table->integer('amount');
            $table->enum('status', ['in_progress', 'completed', 'canceled'])->nullable();
            $table->timestamps();

            $table->foreign('request_id')->references('request_id')->on('requests');
            $table->foreign('vendor_id')->references('vendor_id')->on('vendors');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['request_id']);
            $table->dropForeign(['vendor_id']);
        });
    }
}

