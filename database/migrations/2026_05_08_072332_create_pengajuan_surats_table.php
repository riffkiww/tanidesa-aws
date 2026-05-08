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
        Schema::create('pengajuan_surats', function (Blueprint $table) {
        $table->id();
        $table->string('nik');
        $table->string('nama_lengkap');
        $table->string('jenis_surat'); // Domisili, Usaha, dll
        $table->string('foto_ktp_path'); // Masuk ke S3 juga
        $table->enum('status', ['Menunggu', 'Selesai'])->default('Menunggu');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surats');
    }
};
