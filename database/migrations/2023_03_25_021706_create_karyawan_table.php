<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama_karyawan');
            $table->string('tgl_lahir');
            $table->string('kota_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('jalan');
            $table->string('nama_status_nikah');
            $table->string('lokasi_kerja');
            $table->string('tgl_mulai_bekerja');
            $table->string('tgl_pegawai_perusahaan');
            $table->string('tgl_perkiran_pensiun');
            $table->string('nama_divisi');
            $table->string('tgl_divisi');
            $table->string('kode_loker');
            $table->string('unit_kerja');
            $table->string('loker');
            $table->string('tgl_loker');
            $table->string('jabatan');
            $table->string('umur');
            $table->string('kelompok_usia');
            $table->string('nama_employee_group');
            $table->string('employee_sub_group');
            $table->string('level_pendidikan_terakhir');
            $table->string('pendidikan');
            $table->string('penyelenggara');
            $table->string('jumlah_anak');
            $table->string('adt_pajak');
            $table->string('adt_kesehatan');
            $table->string('jumlah_pasangan');
            $table->string('band_kelas_posisi');
            $table->string('kota');
            $table->string('npwp');
            $table->string('no_telkomedika');
            $table->string('no_bpjs');
            $table->string('no_jamsostek');
            $table->string('email');
            $table->string('no_hp');
            $table->string('keterangan_lanjut_kuliah');
            $table->string('pendidikan_lanjut');
            $table->string('penyelenggara_lanjut');
            $table->string('ukuran_baju');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
};
