<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppendixQsurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appendix_qsurvey', function (Blueprint $table) {
            $table->id();
            $table->string("question1");
            $table->string("question2");
            $table->string("question3");
            $table->string("question4");
            $table->string("question5");
            $table->string("question6");
            $table->timestamps();
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
        Schema::dropIfExists('appendix_qsurvey');
    }
}
