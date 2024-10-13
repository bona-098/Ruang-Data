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
        Schema::create('penghargaan', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk primary key
            $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Pastikan tabel karyawan sesuai
            $table->string('nama_event'); // Kolom untuk Nama Event
            $table->string('nama_penghargaan'); // Kolom untuk Nama Penghargaan
            $table->year('tahun_penghargaan'); // Kolom untuk Tahun Penghargaan
            $table->string('lampiran_penghargaan')->nullable(); // Kolom untuk Lampiran Penghargaan
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
        Schema::dropIfExists('penghargaan'); // Menghapus tabel jika migration di-revert
    }
};
