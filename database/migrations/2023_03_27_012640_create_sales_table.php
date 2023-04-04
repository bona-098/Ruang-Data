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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('unit_kerja');
            $table->string('status_revenue');
            $table->string('customer');
            $table->string('segment');
            $table->string('nama_project');
            $table->string('lokasi_gedung');
            $table->string('jenis_pekerjaan');
            $table->string('portfolio');
            $table->string('progress_project');
            $table->string('status_project');
            $table->string('proses_pendekatan_customer');
            $table->string('visit')->nullable();
            $table->string('sph')->nullable();
            $table->string('bakn');
            $table->string('spk');
            $table->string('masa_project');
            $table->string('jumlah_man_power');
            $table->string('tgl_sp');
            $table->string('no_sp');
            $table->string('jenis_kontrak');
            $table->string('tgl_mulai_project');
            $table->string('tgl_akhir_project');
            $table->string('sisa_kontrak');
            $table->string('nilai_total_project');
            $table->string('nilai_project_pertahun');
            $table->string('nilai_project_perbulan');
            $table->string('nama_key_kontak_client')->nullable();
            $table->string('jabatan_pic_client')->nullable();
            $table->string('no_hp_pic_client')->nullable();
            $table->string('nama_pic_gsd');
            $table->string('drive_kontrak');
            $table->string('amandemen')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('exma');
    }
};
