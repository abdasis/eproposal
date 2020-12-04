<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenetuanRencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penetuan_rencanas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kegiatan', 100)->nullable();
            $table->longText('sub_kegiatan')->nullable();
            $table->longText('sumber_daya')->nullable();
            $table->string('penanggung_jawab', 100);
            $table->longText('jadwal')->nullable();
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
        Schema::dropIfExists('penetuan_rencanas');
    }
}
