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
        Schema::create('data_kerja_karyawan', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Relasi ke tabel karyawan
            $table->string('nik', 50)->nullable();
            $table->string('telkomgroup', 50)->nullable();
            $table->string('band_kelas_posisi', 50)->nullable();
            $table->string('unit_kerja', 50)->nullable();
            $table->string('jabatan', 50)->nullable();
            $table->string('lokasi_kerja', 50)->nullable();
            $table->string('nomor_sk', 50)->nullable();
            $table->text('surat_sk')->nullable();
            $table->date('tgl_bergabung')->nullable();
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key jika id_unit_kerja berelasi dengan tabel lain
            // $table->foreign('id_unit_kerja')->references('id')->on('unit_kerja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kerja_karyawan');
    }
};
