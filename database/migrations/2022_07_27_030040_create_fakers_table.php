<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakersTable extends Migration
{
    public function up()
    {
        Schema::create('fakers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->string('address');
            $table->string('text');
            $table->boolean('flag1');
            $table->boolean('flag2');
            $table->boolean('flag3');
            $table->boolean('flag4');
            $table->boolean('flag5');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fakers');
    }
}
