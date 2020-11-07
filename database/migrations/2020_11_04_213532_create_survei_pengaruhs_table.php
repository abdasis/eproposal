<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveiPengaruhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survei_pengaruhs', function (Blueprint $table) {
            $table->id();
            $table->string('pengaruh', 100);
            $table->string('pengurangan_dampak', 100);
            $table->string('pemanfaatan', 100);
            $table->foreignId('responden_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('survei_pengaruhs');
    }
}
