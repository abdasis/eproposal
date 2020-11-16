<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTujuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tujuans', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan', 100);
            $table->string('indikator_tujuan', 100);
            $table->string('nilai_awal', 100);
            $table->longText('nilai_target');
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
        Schema::dropIfExists('tujuans');
    }
}
