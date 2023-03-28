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
            $table->date('tgl_lahir');
            $table->string('kota_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('jalan');
            $table->string('nama_status_nikah');
            $table->string('lokasi_kerja');
            $table->date('tgl_mulai_bekerja')->nullable();
            $table->date('tgl_pegawai_perusahaan')->nullable();
            $table->date('tgl_perkiraan_pensiun')->nullable();
            $table->string('nama_divisi');
            $table->date('tgl_divisi')->nullable();
            $table->string('kode_loker')->nullable();
            $table->string('unit_kerja');
            $table->string('loker');
            $table->date('tgl_loker');
            $table->date('kode_posisi');
            $table->string('jabatan');
            $table->string('umur');
            $table->string('kelompok_usia');
            $table->string('nama_employee_group');
            $table->string('employee_sub_group');
            $table->string('level_pendidikan_terakhir');
            $table->string('pendidikan');
            $table->string('penyelenggara');
            $table->string('jumlah_anak')->nullable();
            $table->string('adt_pajak')->nullable();
            $table->string('adt_kesehatan')->nullable();
            $table->string('jumlah_pasangan')->nullable();
            $table->string('band_kelas_posisi');
            $table->string('kota')->nullable();
            $table->string('npwp');
            $table->string('no_telkomedika');
            $table->string('no_bpjs');
            $table->string('no_jamsostek');
            $table->string('email');
            $table->string('no_hp');
            $table->string('keterangan_lanjut_kuliah')->nullable();
            $table->string('pendidikan_lanjut')->nullable();
            $table->string('penyelenggara_lanjut')->nullable();
            $table->string('ukuran_baju')->nullable();
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
