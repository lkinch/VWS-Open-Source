<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppendixO extends Migration
{
    public function up()
    {
        Schema::create('appendix_O', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->string('gender');
            $table->string('height');
            $table->string('weight');
            $table->string('occupation');
            $table->string('employment');
            $table->string('chronic_conditions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appendix_O');
    }
}
