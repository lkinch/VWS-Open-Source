<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToAppendixo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appendix_O', function (Blueprint $table) {
            $table->timestamps();
            $table->foreign('user_id');
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
        Schema::table('appendix_O', function (Blueprint $table) {
             $table->dropColumn('timestamps');
             $table->dropColumn('user_id');
             $table->dropColumn('name');

        });
    }
}
