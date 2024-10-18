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
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->foreignId('unit_id')->nullable()->constrained('unit_kerja')->onDelete('set null'); // Relasi ke tabel karyawan.
            $table->unsignedBigInteger('karyawan_id')->nullable(); // Mengizinkan NULL
            $table->string('nama', 50)->nullable();
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
        Schema::dropIfExists('jabatan');
    }
};
