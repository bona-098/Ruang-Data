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
    'nama_karyawan',
    'tgl_lahir',
    'kota_lahir',
    'agama',
    'jenis_kelamin',
    'jalan',
    'nama_status_nikah',
    'lokasi_kerja',
    'tgl_mulai_bekerja',
    'tgl_pegawai_perusahaan',
    'tgl_perkiraan_pensiun',
    'nama_divisi',
    'tgl_divisi',
    'kode_loker',
    'unit_kerja',
    'loker',
    'tgl_loker',
    'kode_posisi',
    'jabatan',
    'umur',
    'kelompok_usia',
    'nama_employee_group',
    'employee_sub_group',
    'level_pendidikan_terakhir',
    'pendidikan',
    'penyelenggara',
    'jumlah_anak',
    'adt_pajak',
    'adt_kesehatan',
    'jumlah_pasangan',
    'band_kelas_posisi',
    'kota',
    'npwp',
    'no_telkomedika',
    'no_bpjs',
    'no_jamsostek',
    'email',
    'no_hp',
    'keterangan_lanjut_kuliah',
    'pendidikan_lanjut',
    'penyelenggara_lanjut',
    'ukuran_baju'
    ];
}