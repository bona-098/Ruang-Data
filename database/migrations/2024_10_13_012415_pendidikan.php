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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk primary key
            $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Relasi ke tabel karyawan
            $table->string('jenjang_pendidikan'); // Kolom untuk Jenjang Pendidikan
            $table->string('nama_institusi'); // Kolom untuk Nama Institusi
            $table->string('jurusan'); // Kolom untuk Jurusan
            $table->year('tahun_lulus'); // Kolom untuk Tahun Lulus
            $table->string('lampiran_ijazah')->nullable(); // Kolom untuk Lampiran Pendukung
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
        Schema::dropIfExists('pendidikan'); // Menghapus tabel jika migration di-revert
    }
};
