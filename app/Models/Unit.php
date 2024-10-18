<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'unit_kerja';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'id',
        'nama',
    ];

    // Relasi dengan model Karyawan
    public function jabatan()
    {
        return $this->hasMany(Jabatan::class, 'karyawan_id');
    }
}
