<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    use HasFactory;
    public $table = 'perangkat';
    protected $fillable = [
        'id_group',
        'id_area',
        'id_unit',
        'nama_unit',
        'id_witel',
        'nama_witel',
        'id_lokasi',
        'nama_lokasi',
        'id_gedung',
        'nama_gedung',
        'id_kelas',
        'id_room',
        'id_lantai',
        'nama_lantai',
        'jid',
        'nama_jenis',
        'kid',
        'kategori',
        'skid',
        'sub_kategori',
        'nama_perangkat',
        'is_ceklis',
        'merk',
        'satuan',
        'jumlah',
        'kapasitas',
        'no_seri',
        'type',
        'tahun',
        'kondisi',
        'milik',
        'keterangan',
        'id_perangkat',
    ];
}
