<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kondisi', 250);
            $table->string('kondisi', 250);
            $table->string('penyebab_langsung', 250);
            $table->string('swot', 1);
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
        Schema::dropIfExists('kondisis');
    }
}
