<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategis', function (Blueprint $table) {
            $table->id();
            $table->longText('kw')->nullable();
            $table->longText('tujuan_kw')->nullable();
            $table->longText('sw')->nullable();
            $table->longText('tujuan_sw')->nullable();
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
        Schema::dropIfExists('strategis');
    }
}
