<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorTujuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_tujuans', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan_prioritas', 100)->nullable();
            $table->string('indikator_kinerja', 100)->nullable();
            $table->string('nilai_awal', 100)->nullable();
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
        Schema::dropIfExists('indikator_tujuans');
    }
}
