<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (optional)
    protected $table = 'pelatihan';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'karyawan_id',
        'nama_pelatihan',
        'kategori_pelatihan',
        'tanggal_mulai',
        'tanggal_akhir',
        'nama_penyelenggara',
        'lampiran_pendukung',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}
