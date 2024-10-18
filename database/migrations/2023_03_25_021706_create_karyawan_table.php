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
            // PRIBADI
            $table->string('nama_karyawan', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('kota_lahir', 100)->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->text('alamat')->nullable();
            $table->string('agama', 50)->nullable();
            $table->string('suku', 50)->nullable();
            $table->string('golongan_darah', 5)->nullable();
            $table->string('kontak_darurat', 15)->nullable();   //Kontak Darurat 
            // KELUARGA
            // $table->string('status_nikah', 100)->nullable();
            // $table->date('tgl_nikah')->nullable();
            // $table->string('tanggungan_keluarga', 100)->nullable();
            // $table->integer('jumlah_anak')->nullable();
            // $table->string('nomor_kartu_keluarga', 100)->nullable();
            // $table->string('nama_pasangan', 100)->nullable();
            // $table->string('nama_anak_pertama', 100)->nullable();
            // $table->string('tgl_lahir_anak_pertama', 100)->nullable();
            // $table->string('nama_anak_kedua', 100)->nullable();
            // $table->string('tgl_lahir_anak_kedua', 100)->nullable();
            // $table->string('nama_anak_ketiga', 100)->nullable();
            // $table->string('tgl_lahir_anak_ketiga', 100)->nullable();
            //JOB
           
            // $table->string('status_kepegawaian', 50)->nullable();
            //JOB HISRTORY DI TABEL BARU
            //PENDIDIKAN
            // $table->string('jenjang_pendidikan', 100)->nullable();
            // $table->string('penyelenggara_pendidikan', 100)->nullable();
            // $table->string('program_studi', 100)->nullable();
            // $table->string('tahun_lulus', 100)->nullable();
            // $table->text('ijazah')->nullable();
            //PELATIHAN DI TABEL BARU
            //Lain lain
            $table->string('no_hp', 15)->nullable();
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
