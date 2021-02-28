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
        Schema::table('new_appendix_o', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->string('persons_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_appendix_o', function (Blueprint $table) {
            //  $table->dropForeign('user_id_foreign');
             $table->dropColumn('persons_name');

        });
    }
}
