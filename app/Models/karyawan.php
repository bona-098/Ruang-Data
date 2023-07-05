<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    public $table = 'karyawan';
    protected $fillable = [
        'nik',
        'no_hp',            
        'nama_karyawan',
        'jenis_kelamin',
        'tgl_lahir',
        'kota_lahir',
        'agama',
        'jalan',
        'unit_kerja',
        'loker',            
        'jabatan',            
        'band_kelas_posisi',
    ];
}