<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'talent';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'karyawan_id',
        'tanggal_talent',
        'status',
    ];

     // Relasi dengan model Karyawan
     public function karyawan()
     {
         return $this->belongsTo(Karyawan::class, 'karyawan_id');
     }
}
