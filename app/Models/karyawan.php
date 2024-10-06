<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nik',
        'telkomgroup',            
        'nama_karyawan',
        'jenis_kelamin',
        'tgl_lahir',
        'kota_lahir',
        'agama',
        'alamat',
        'unit_kerja',
        'jabatan',            
        'band_kelas_posisi',
        'no_hp',
        'kontak_darurat',
        'status_nikah',
        'nama_pasangan',
        'suku',
        'golongan_darah',
        'jumlah_anak',
        'tgl_bergabung',
        'status_kepegawaian',
        'nomor_sk',
        'surat_sk',
        'jenjang_pendidikan',
        'program_studi',
        'penyelenggara_pendidikan',
        'ijazah',
        'bpjs_kesehatan',
        'bpjs_ketenagakerjaan',
        'telkomedika',
        'npwp',
        'rekening_bank',
        'loker',      
        'foto',      
    ];

    public function jobHistories()
    {
        return $this->hasMany(JobHistory::class, 'karyawan_id');
    }
}
