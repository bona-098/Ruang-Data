<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoringpm extends Model
{
    use HasFactory;
    public $table = 'monitoringpm';

    protected $fillable = [
        'unit_kerja',
        'customer',
        'segmen',
        'nama_project',
        'nilai_kontrak',
        'nilai_perbulan',
        'jumlah_hk',
        'jumlah_security',
        'total_pkwt',
        'tanggal_kontrak',
        'tahun_pengadaan',
        'sph',
        'boq',
        'bakn',
        'jib',
        'kontrak',
        'nd_pengajuan',
        'nd_persetujuan',
        'pkwt',
        'crm',
    ];
}
