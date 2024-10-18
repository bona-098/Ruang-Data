<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'jabatan';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'unit_id',
        'karyawan_id',
        'nama'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id'); // Pastikan kolom 'unit_id' sesuai dengan struktur tabel
    }
}
