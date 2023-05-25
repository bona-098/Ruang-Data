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
            $table->string('id_group');
            $table->string('id_area');
            $table->string('id_unit');
            $table->string('nama_unit');
            $table->string('id_witel');
            $table->string('nama_witel');
            $table->string('id_lokasi');
            $table->string('nama_lokasi');
            $table->string('id_gedung');
            $table->string('nama_gedung');
            $table->string('id_kelas');
            $table->string('id_room');
            $table->string('id_lantai');
            $table->string('nama_lantai');
            $table->string('jid');
            $table->string('nama_jenis');
            $table->string('kid');
            $table->string('kategori');
            $table->string('skid');
            $table->string('sub_kategori');
            $table->string('nama_perangkat');
            $table->string('is_ceklis');
            $table->string('merk');
            $table->string('satuan');
            $table->string('jumlah');
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
