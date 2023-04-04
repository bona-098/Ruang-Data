<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectlop extends Model
{
    use HasFactory;
    public $table = "projectlop";
    protected $fillable = [
        'deskripsi_pekerjaan',
        'deskripsi_pekerjaan',
        'lokasi',
        'witel',
        'fm',
        'status_lop',
        'nilai',
        'nilai_sbo',
        'nilai_kontrak_sbo',
        'nilai_juskeb',
        'nilai_drm',
        'nilai_rekon',
        'progres_ml',
        'progres_mi',
        'nilai_progres',
        'nilai_progres_mi',
        'margin',
        'rekon_digir',
        'bakom_laut',
        'nilai_mitra',
        'mitra',
        'tanggal_pelimpahan',
        'jangka_waktu',
        'status_pekerjaan',
        'status_projek',
        'keterangan'
    ];
}
