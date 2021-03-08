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

            //BUG fixed: use this in the future
            // ask user for <input type="date"> on the form to store this appropriately
            $table->date('DeliveryDate')->nullable();
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
