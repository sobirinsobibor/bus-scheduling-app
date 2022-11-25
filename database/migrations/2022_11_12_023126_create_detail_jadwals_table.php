<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_id');
            $table->foreignId('bus_id');
            $table->foreignId('keberangkatan_id');
            $table->foreignId('kedatangan_id');
            $table->foreignId('jam_keberangkatan_id');
            $table->foreignId('jam_kedatangan_id');
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
        Schema::dropIfExists('detail_jadwals');
    }
};
