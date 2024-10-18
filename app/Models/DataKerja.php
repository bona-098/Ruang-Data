<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKerja extends Model
{
    use HasFactory;

    protected $table = 'data_kerja_karyawan'; // Menentukan nama tabel

    protected $fillable = [
        'karyawan_id',
        'nik',
        'telkomgroup',
        'band_kelas_posisi',
        'nama_unit',
        'jabatan',
        'lokasi_kerja',
        'nomor_sk',
        'surat_sk',
        'tgl_bergabung',
    ];

    // Relasi ke model Karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
