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
        Schema::create('keterampilan', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk primary key
            $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Relasi ke tabel karyawan
            $table->string('nama_keterampilan'); // Kolom untuk Nama Keterampilan
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
        Schema::dropIfExists('keterampilan'); // Menghapus tabel jika migration di-revert
    }
};
