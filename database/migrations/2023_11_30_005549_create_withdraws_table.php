<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->string('kode_request');
            $table->string('no_rekening');
            $table->string('nama_pemilik_kartu');
            $table->string('negara');
            $table->timestamp('tanggal_pembayaran')->nullable();
            $table->unsignedBigInteger('nominal');
            $table->string('status');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
