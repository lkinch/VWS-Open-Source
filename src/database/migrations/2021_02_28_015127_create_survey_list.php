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
        Schema::create('survey_list', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('SurveyName');
            $table->timestamp('CreateDate')->nullable();
            $table->timestamp('DeliveryDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_list');
    }
}
