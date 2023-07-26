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
            $table->string('unit_kerja', 255)->nullable();
            $table->string('status_revenue', 255)->nullable();
            $table->string('customer', 255)->nullable();
            $table->string('segment', 255)->nullable();
            $table->string('nama_project', 255)->nullable();
            $table->string('lokasi_gedung', 255)->nullable();
            $table->string('jenis_pekerjaan', 255)->nullable();
            $table->string('portfolio', 255)->nullable();
            $table->string('progress_project', 255)->nullable();
            $table->string('status_project', 255)->nullable();
            $table->string('proses_pendekatan_customer', 255)->nullable();
            $table->string('visit', 255)->nullable();
            $table->string('sph', 255)->nullable();
            $table->string('bakn', 255)->nullable();
            $table->string('spk', 255)->nullable();
            $table->string('masa_project', 255)->nullable();
            $table->string('jumlah_man_power', 255)->nullable();
            $table->string('tgl_sp', 255)->nullable();
            $table->string('no_sp', 255)->nullable();
            $table->string('jenis_kontrak', 255)->nullable();
            $table->string('tgl_mulai_project', 255)->nullable();
            $table->string('tgl_akhir_project', 255)->nullable();
            $table->string('sisa_kontrak', 255)->nullable();
            $table->string('nilai_total_project', 255)->nullable();
            $table->string('nilai_project_pertahun', 255)->nullable();
            $table->string('nilai_project_perbulan', 255)->nullable();
            $table->string('nama_key_kontak_client', 255)->nullable();
            $table->string('jabatan_pic_client', 255)->nullable();
            $table->string('no_hp_pic_client', 255)->nullable();
            $table->string('nama_pic_gsd', 255)->nullable();
            $table->string('drive_kontrak', 255)->nullable();
            $table->string('amandemen', 255)->nullable();
            $table->string('keterangan', 255)->nullable();
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
