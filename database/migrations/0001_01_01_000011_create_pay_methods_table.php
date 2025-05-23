<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayMethodsTable extends Migration
{
    public function up()
{
    Schema::create('pay_methods', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('description')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('pay_methods');
    }
}
