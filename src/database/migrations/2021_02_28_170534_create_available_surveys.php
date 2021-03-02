<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableSurveys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_surveys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('SurveyName');
            $table->string('DeliveryFreq');
            //  TODO: figure out how to do it this way
            // $table->timestamp('ProgramStartDate')->nullable();
            $table->string('ProgramStartDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_surveys');
    }
}
