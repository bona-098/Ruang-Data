<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exma extends Model
{
    use HasFactory;
    protected $table = "exma";

    protected $fillable = [
        'unit_kerja',
        'status_revenue',
        'customer',
        'segment',
        'nama_project',
        'lokasi_gedung',
        'jenis_pekerjaan',
        'portofolio',
        'progress_project',
        'status_project',
        'proses_pendekatan_customer',
        'visit',
        'sph',
        'bakn',
        'spk',
        'masa_project',
        'jumlah_man_power',
        'tgl_sp',
        'no_sp',
        'jenis_kontrak',
        'tgl_mulai_project',
        'tgl_akhir_project',
        'sisa_kontrak',
        'nilai_total_project',
        'nilai_project_pertahun',
        'nilai_project_perbulan',
        'nama_key_kontak_client',
        'jenis_kontrak',
        'jabatan_pic_client',
        'no_hp_pic_client',
        'nama_pic_gsd',
        'drive_kontrak',
        'amandemen',
        'keterangan',
    ];
    protected $guarded = ['id'];
}
