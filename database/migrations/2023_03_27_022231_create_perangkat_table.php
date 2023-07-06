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
        Schema::create('perangkat', function (Blueprint $table) {
            $table->id();
            $table->string('id_group')->nullable();
            $table->string('id_area')->nullable();
            $table->string('id_unit')->nullable();
            $table->string('nama_unit')->nullable();
            $table->string('id_witel')->nullable();
            $table->string('nama_witel')->nullable();
            $table->string('id_lokasi')->nullable();
            $table->string('nama_lokasi')->nullable();
            $table->string('id_gedung')->nullable();
            $table->string('nama_gedung')->nullable();
            $table->string('id_kelas')->nullable();
            $table->string('id_room')->nullable();
            $table->string('id_lantai')->nullable();
            $table->string('nama_lantai')->nullable();
            $table->string('jid')->nullable();
            $table->string('nama_jenis')->nullable();
            $table->string('kid')->nullable();
            $table->string('kategori')->nullable();
            $table->string('skid')->nullable();
            $table->string('sub_kategori')->nullable();
            $table->string('nama_perangkat')->nullable();
            $table->string('is_ceklis')->nullable();
            $table->string('merk')->nullable();
            $table->string('satuan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('type')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('milik')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('id_perangkat');
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
        Schema::dropIfExists('perangkat');
    }
};
