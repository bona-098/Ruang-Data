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
        Schema::create('data_keluarga', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk primary key
            $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Relasi ke tabel karyawan
            $table->string('status_nikah'); // Kolom untuk Status Nikah
            $table->date('tgl_nikah')->nullable(); // Kolom untuk Tanggal Nikah
            $table->integer('tanggungan_keluarga')->default(0); // Kolom untuk Tanggungan Keluarga
            $table->integer('jumlah_anak')->default(0); // Kolom untuk Jumlah Anak
            $table->string('nomor_kartu_keluarga')->nullable(); // Kolom untuk Nomor Kartu Keluarga
            $table->string('nama_pasangan')->nullable(); // Kolom untuk Nama Pasangan
            $table->string('nama_anak_pertama')->nullable(); // Kolom untuk Nama Anak Pertama
            $table->date('tgl_lahir_anak_pertama')->nullable(); // Kolom untuk Tanggal Lahir Anak Pertama
            $table->string('nama_anak_kedua')->nullable(); // Kolom untuk Nama Anak Kedua
            $table->date('tgl_lahir_anak_kedua')->nullable(); // Kolom untuk Tanggal Lahir Anak Kedua
            $table->string('nama_anak_ketiga')->nullable(); // Kolom untuk Nama Anak Ketiga
            $table->date('tgl_lahir_anak_ketiga')->nullable(); // Kolom untuk Tanggal Lahir Anak Ketiga
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_keluarga'); // Menghapus tabel jika migration di-revert
    }
};
