<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->longText('judul_kegiatan')->nullable();
            $table->longText('sumber_daya')->nullable();
            $table->string('penanggung_jawab', 100);
            $table->longText('jadwal')->nullable();
            $table->foreignId('penetuan_rencana_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('sub_kegiatans');
    }
}
