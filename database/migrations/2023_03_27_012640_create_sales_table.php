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
            $table->string('unit_kerja')->nullable();
            $table->string('status_revenue')->nullable();
            $table->string('customer')->nullable();
            $table->string('segment')->nullable();
            $table->string('nama_project')->nullable();
            $table->string('lokasi_gedung')->nullable();
            $table->string('jenis_pekerjaan')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('progress_project')->nullable();
            $table->string('status_project')->nullable();
            $table->string('proses_pendekatan_customer')->nullable();
            $table->string('visit')->nullable();
            $table->string('sph')->nullable();
            $table->string('bakn')->nullable();
            $table->string('spk')->nullable();
            $table->string('masa_project')->nullable();
            $table->string('jumlah_man_power')->nullable();
            $table->string('tgl_sp')->nullable();
            $table->string('no_sp')->nullable();
            $table->string('jenis_kontrak')->nullable();
            $table->string('tgl_mulai_project')->nullable();
            $table->string('tgl_akhir_project')->nullable();
            $table->string('sisa_kontrak')->nullable();
            $table->string('nilai_total_project')->nullable();
            $table->string('nilai_project_pertahun')->nullable();
            $table->string('nilai_project_perbulan')->nullable();
            $table->string('nama_key_kontak_client')->nullable();
            $table->string('jabatan_pic_client')->nullable();
            $table->string('no_hp_pic_client')->nullable();
            $table->string('nama_pic_gsd')->nullable();
            $table->string('drive_kontrak')->nullable();
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
