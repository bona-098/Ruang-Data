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
            $table->string('nik')->nullable();
            $table->string('nama_karyawan')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('kota_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('jalan')->nullable();
            $table->string('nama_status_nikah')->nullable();
            $table->string('lokasi_kerja')->nullable();
            $table->date('tgl_mulai_bekerja')->nullable();
            $table->date('tgl_pegawai_perusahaan')->nullable();
            $table->date('tgl_perkiraan_pensiun')->nullable();
            $table->string('nama_divisi')->nullable();
            $table->date('tgl_divisi')->nullable();
            $table->string('kode_loker')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('loker')->nullable();
            $table->date('tgl_loker')->nullable();
            $table->string('kode_posisi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('umur')->nullable();
            $table->string('kelompok_usia')->nullable();
            $table->string('nama_employee_group')->nullable();
            $table->string('employee_sub_group')->nullable();
            $table->string('level_pendidikan_terakhir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('jumlah_anak')->nullable();
            $table->string('adt_pajak')->nullable();
            $table->string('adt_kesehatan')->nullable();
            $table->string('jumlah_pasangan')->nullable();
            $table->string('band_kelas_posisi')->nullable();
            $table->string('kota')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_telkomedika')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('no_jamsostek')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
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
