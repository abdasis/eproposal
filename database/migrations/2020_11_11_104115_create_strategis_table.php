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
            $table->string('killerweakness1', 100);
            $table->string('kw1', 100);
            $table->string('tujuan_1', 100);

            $table->string('killerweakness2', 100);
            $table->string('kw2', 100);
            $table->string('tujuan_2', 100);

            $table->string('killerweakness3', 100);
            $table->string('sw1', 100);
            $table->string('tujuan_3', 100);
            $table->string('killerweakness4', 100);
            $table->string('sw2', 100);
            $table->string('tujuan_4', 100);
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
