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
        return $this->hasMany(DataKerja::class, 'karyawan_id'); // Sudah benar jika memang data pekerjaan adalah milik karyawan
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
