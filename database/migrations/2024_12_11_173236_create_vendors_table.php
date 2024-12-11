<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id('vendor_id');
            $table->string('name', 100);
            $table->string('email', 100)->nullable();
            $table->char('phone_number', 13)->nullable();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}

