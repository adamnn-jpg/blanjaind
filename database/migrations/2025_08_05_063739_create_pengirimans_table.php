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
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->id();
            $table->enum('kurir', ['J&T', 'JNE', 'Pos Indonesia', 'TIKI', 'SiCepat', 'Lion Parcel']);
            $table->string('nomor_resi');
            $table->string('status');
            $table->text('alamat_pengiriman');
            // BELUM SELESAI

            $table->foreignId('pesanan_id')->references('id')->on('pesanans')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimans');
    }
};
