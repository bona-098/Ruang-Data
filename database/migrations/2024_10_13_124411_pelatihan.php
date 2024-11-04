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
        Schema::create('pelatihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Relasi ke tabel karyawan
            $table->string('nama_pelatihan'); // Nama Pelatihan
            $table->string('kategori_pelatihan');
            $table->date('tanggal_mulai'); // Tanggal Mulai Pelatihan
            $table->date('tanggal_akhir'); // Tanggal Akhir Pelatihan
            $table->string('nama_penyelenggara'); // Nama Penyelenggara
            $table->string('lampiran_pendukung')->nullable(); // Lampiran Pendukung
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelatihan');
    }
};
