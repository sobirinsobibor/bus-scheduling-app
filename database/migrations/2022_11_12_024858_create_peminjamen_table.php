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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('peminjaman_code');
            $table->foreignId('user_id');
            $table->String('perihal');
            $table->string('tujuan');
            $table->date('tgl_peminjaman_mulai');
            $table->time('time_peminjaman_mulai');
            $table->date('tgl_peminjaman_selesai');
            $table->time('time_peminjaman_selesai');
            $table->boolean('accepted')->nullable();
            $table->string('decline')->nullable();
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
        Schema::dropIfExists('peminjamen');
    }
};
