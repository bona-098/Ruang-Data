<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'catatan';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'karyawan_id',
        'user_id',
        'catatan',
    ];

    // Relasi dengan model Karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
