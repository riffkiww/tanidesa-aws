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
        Schema::create('laporan_fasilitas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelapor');
        $table->text('deskripsi_kerusakan');
        $table->string('foto_path'); // Path file yang nanti diupload ke S3
        $table->enum('status', ['Menunggu', 'Diproses', 'Selesai'])->default('Menunggu');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_fasilitas');
    }
};
