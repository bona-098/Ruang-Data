<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'pendidikan';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'karyawan_id',
        'jenjang_pendidikan',
        'nama_institusi',
        'jurusan',
        'tahun_lulus',
        'lampiran_pendukung',
    ];

    // Relasi dengan model Karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}
