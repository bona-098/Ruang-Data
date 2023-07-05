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
            $table->string('no_hp')->nullable();            
            $table->string('nama_karyawan')->nullable();            
            $table->string('jenis_kelamin')->nullable();            
            $table->date('tgl_lahir')->nullable();            
            $table->string('kota_lahir')->nullable();            
            $table->string('agama')->nullable();            
            $table->string('jalan')->nullable();            
            $table->string('unit_kerja')->nullable();            
            $table->string('loker')->nullable();            
            $table->string('jabatan')->nullable();            
            $table->string('band_kelas_posisi')->nullable();            
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
