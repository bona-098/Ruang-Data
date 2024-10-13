<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'data_keluarga';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'karyawan_id',
        'status_nikah',
        'tgl_nikah',
        'tanggungan_keluarga',
        'jumlah_anak',
        'nomor_kartu_keluarga',
        'nama_pasangan',
        'nama_anak_pertama',
        'tgl_lahir_anak_pertama',
        'nama_anak_kedua',
        'tgl_lahir_anak_kedua',
        'nama_anak_ketiga',
        'tgl_lahir_anak_ketiga',
    ];

    // Relasi dengan model Karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
