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
            $table->integer('biaya');
            $table->longText('catatan')->nullable();
            $table->timestamp('tanggal_pengiriman')->nullable();
            $table->timestamp('tanggal_tiba')->nullable();
            $table->foreignId('pesanan_id')->constrained('pesanans')->onDelete('cascade');


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
