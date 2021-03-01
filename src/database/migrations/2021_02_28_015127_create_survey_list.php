<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('SurveyName');

            //TODO: use this in the future
            // $table->timestamp('DeliveryDate')->nullable();
            $table->string('DeliveryDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_lists');
    }
}
