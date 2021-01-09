<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNilaiManfaatWToSurveyKondisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('survey_kondisis', function (Blueprint $table) {
            $table->longText('total_manfaat_w')->nullable();
            $table->longText('total_dampak_w')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('survey_kondisis', function (Blueprint $table) {
            //
        });
    }
}
