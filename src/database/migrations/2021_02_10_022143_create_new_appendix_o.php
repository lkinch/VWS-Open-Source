<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewAppendixO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_appendix_o', function (Blueprint $table) {
            $table->id('appendix_id');
            $table->string('age');
            $table->string('gender');
            $table->string('height');
            $table->string('weight');
            $table->string('occupation');
            $table->string('employment');
            $table->string('chronic_conditions');
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
        Schema::dropIfExists('new_appendix_o');
    }
}
