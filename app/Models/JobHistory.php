<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;

    protected $table = 'job_histories';

    protected $fillable = [
        'karyawan_id',
        'nama',
        'tgl_jabat',
        'lokasi',
        'band',
        'lampiran',
    ];

    /**
     * Relasi dengan model Karyawan.
     */
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function datakerjakaryawans()
    {
        return $this->hasMany(DataKerja::class, 'karyawan_id');
    }
}
