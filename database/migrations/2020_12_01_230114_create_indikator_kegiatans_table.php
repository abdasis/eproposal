<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan_prioritas', 100)->nullable();
            $table->string('no_kegiatan', 100)->nullable();
            $table->longText('kegiaatan')->nullable();
            $table->longText('indikator_kinerja')->nullable();
            $table->string('nilai_awal', 100)->nullable();
            $table->string('nilai_target', 100)->nullable();
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
        Schema::dropIfExists('indikator_kegiatans');
    }
}
