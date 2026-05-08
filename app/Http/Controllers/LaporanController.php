<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanFasilitas;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        // Mengambil semua data laporan dari database, diurutkan dari yang terbaru
        $semua_laporan = LaporanFasilitas::latest()->get();
        
        // Mengirim data tersebut ke halaman 'status'
        return view('status', compact('semua_laporan'));
    }


    public function store(Request $request)
    {
        // 1. Validasi input agar tidak ada data kosong atau format salah
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'deskripsi_kerusakan' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Maksimal 2MB
        ]);

        // 2. Upload file langsung ke Amazon S3 (ke dalam folder 'foto_laporan')
        $pathFoto = $request->file('foto')->store('foto_laporan', 's3');

        // 3. Simpan data teks dan nama file ke Database
        LaporanFasilitas::create([
            'nama_pelapor' => $request->nama_pelapor,
            'deskripsi_kerusakan' => $request->deskripsi_kerusakan,
            'foto_path' => $pathFoto, 
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim dan foto otomatis tersimpan di cloud S3!');
    }

    public function storeSurat(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:16',
            'nama_lengkap' => 'required|string|max:255',
            'jenis_surat' => 'required|string',
            'foto_ktp' => 'required|image|max:2048',
        ]);

        // Upload ke folder yang berbeda di S3
        $pathFoto = $request->file('foto_ktp')->store('foto_ktp_warga', 's3');

        \App\Models\PengajuanSurat::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_surat' => $request->jenis_surat,
            'foto_ktp_path' => $pathFoto, 
        ]);

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim! KTP aman di S3.');
    }
}