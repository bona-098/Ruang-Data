<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50)->nullable();
            $table->string('telkomgroup', 50)->nullable();   //Kontak Darurat         
            $table->string('nama_karyawan', 100)->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('kota_lahir', 100)->nullable();
            $table->string('agama', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->string('unit_kerja', 100)->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->string('band_kelas_posisi', 50)->nullable();
            $table->string('no_hp', 15)->nullable();   //Kontak Darurat 
            $table->string('kontak_darurat', 15)->nullable();   //Kontak Darurat 
            $table->string('status_nikah', 100)->nullable();
            $table->string('nama_pasangan', 100)->nullable();
            $table->string('suku', 50)->nullable();
            $table->string('golongan_darah', 5)->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->date('tgl_bergabung')->nullable();
            $table->string('status_kepegawaian', 50)->nullable();
            $table->string('nomor_sk', 50)->nullable();
            $table->text('surat_sk')->nullable();
            $table->string('jenjang_pendidikan', 100)->nullable();
            $table->string('program_studi', 100)->nullable();
            $table->string('penyelenggara_pendidikan', 100)->nullable();
            $table->text('ijazah')->nullable();
            $table->string('bpjs_kesehatan', 50)->nullable();
            $table->string('bpjs_ketenagakerjaan', 50)->nullable();
            $table->string('telkomedika', 50)->nullable();
            $table->string('npwp', 50)->nullable();
            $table->string('rekening_bank', 50)->nullable();
            $table->string('foto', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
};
