<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        // PRIBADI
        'tgl_lahir',
        'kota_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'suku',
        'golongan_darah',
        'kontak_darurat',
        // KELUARGA
        // 'status_nikah',
        // 'tgl_nikah',
        // 'tanggungan_keluarga',
        // 'jumlah_anak',
        // 'nomor_kartu_keluarga',
        // 'nama_pasangan',
        // 'nama_anak_pertama',
        // 'tgl_lahir_anak_pertama',
        // 'nama_anak_kedua',
        // 'tgl_lahir_anak_kedua',
        // 'nama_anak_ketiga',
        // 'tgl_lahir_anak_ketiga',
        //JOB
        // 'nik',
        // 'telkomgroup',
        // 'unit_kerja',
        // 'band_kelas_posisi',
        // 'jabatan',
        // 'tgl_bergabung',
        // 'nama_karyawan',
        // 'nomor_sk',
        // 'surat_sk',
        // 'status_kepegawaian',
        //PENDIDIKAN
        // 'jenjang_pendidikan',
        // 'penyelenggara_pendidikan',
        // 'program_studi',
        // 'tahun_lulus',
        // 'ijazah',
        //Lain lain
        'bpjs_kesehatan',
        'bpjs_ketenagakerjaan',
        'telkomedika',
        'npwp',
        'rekening_bank',
        'foto',

    ];

    public function jobHistories()
    {
        return $this->hasMany(JobHistory::class, 'karyawan_id');
    }
    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'karyawan_id');
    }

    public function pelatihan()
    {
        return $this->hasMany(Pelatihan::class, 'karyawan_id');
    }

    public function keluarga()
    {
        return $this->hasMany(Keluarga::class, 'karyawan_id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'karyawan_id');
    }

    public function datakerjakaryawans()
    {
        return $this->hasMany(DataKerja::class, 'karyawan_id');
    }

    public function keterampilan()
    {
        return $this->hasMany(Keterampilan::class, 'karyawan_id');
    }

    public function talent()
    {
        return $this->hasMany(Talent::class);
    }

    public function catatans()
    {
        return $this->hasMany(Catatan::class);
    }
}
