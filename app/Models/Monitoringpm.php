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
        'jenis_pengelolaan',
        'mitra_pengelolaan',
        'jumlah_hk',
        'jumlah_security',
        'jumlah_driver',
        'jumlah_admin',
        'jumlah_teknisi',
        'total_pkwt',
        'awal_kontrak',
        'akhir_kontrak',
        'sisa_kontrak',
        'tahun_pengadaan',
        'sph',
        'boq',
        'bakn',
        'jib',
        'kontrak',
        'nd_pengajuan',
        'nd_persetujuan',
        'pkwt',
        'crm_np',
        'crm_nd',
        'crm_cc',
    ];
}
