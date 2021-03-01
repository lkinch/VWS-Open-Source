<?php

use Silber\Bouncer\Database\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataToPopulateSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_to_populate_surveys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('QuestionNum')->unsigned()->nullable();;
            $table->string('QuestionDescription');
            $table->bigInteger('AnswerNum')->unsigned()->nullable();;
            $table->string('AnswerDescription');

            $table->bigInteger('survey_id')->unsigned()->nullable();;
            $table->foreign('survey_id')
                  ->references('id')->on(Models::table('available_surveys'))
                  ->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('data_to_populate_surveys');
    }
}
