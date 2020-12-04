<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyKondisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_kondisis', function (Blueprint $table) {
            $table->id();
            $table->string('pengaruh', 100);
            $table->string('swot', 1);
            $table->string('nilai_dampak', 100);
            $table->string('nilai_manfaat', 100);
            $table->string('total', 100);
            $table->foreignId('proposal_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_kondisis');
    }
}
