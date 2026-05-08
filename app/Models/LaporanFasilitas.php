<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanFasilitas extends Model
{
    use HasFactory;
    
    // Sesuaikan dengan nama tabel di database
    protected $table = 'laporan_fasilitas'; 
    protected $guarded = []; // Mengizinkan semua kolom diisi
}