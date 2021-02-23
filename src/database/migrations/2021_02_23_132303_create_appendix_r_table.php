<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppendixRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appendix_r', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("question1");
            $table->string("question2");
            $table->string("question3");
            $table->string("question4");
            $table->string("question5");
            $table->string("question6")->nullable(true);
            $table->string("question7");
            $table->string("question8")->nullable(true);
            $table->string("question9");
            $table->string("question10")->nullable(true);
            $table->string("question11");
            $table->string("question12")->nullable(true);
            $table->foreignId('user_id')->constrained()->onDelete("cascade");
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appendix_r');
    }
}
