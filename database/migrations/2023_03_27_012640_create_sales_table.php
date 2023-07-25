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
            $table->string('unit_kerja', 50)->nullable();
            $table->string('status_revenue', 50)->nullable();
            $table->string('customer', 50)->nullable();
            $table->string('segment', 50)->nullable();
            $table->string('nama_project', 50)->nullable();
            $table->string('lokasi_gedung', 100)->nullable();
            $table->string('jenis_pekerjaan', 50)->nullable();
            $table->string('portfolio', 50)->nullable();
            $table->string('progress_project', 50)->nullable();
            $table->string('status_project', 50)->nullable();
            $table->string('proses_pendekatan_customer', 50)->nullable();
            $table->string('visit', 50)->nullable();
            $table->string('sph', 50)->nullable();
            $table->string('bakn', 50)->nullable();
            $table->string('spk', 50)->nullable();
            $table->string('masa_project', 50)->nullable();
            $table->string('jumlah_man_power', 50)->nullable();
            $table->string('tgl_sp', 100)->nullable();
            $table->string('no_sp', 50)->nullable();
            $table->string('jenis_kontrak', 50)->nullable();
            $table->string('tgl_mulai_project', 100)->nullable();
            $table->string('tgl_akhir_project', 100)->nullable();
            $table->string('sisa_kontrak', 50)->nullable();
            $table->string('nilai_total_project', 200)->nullable();
            $table->string('nilai_project_pertahun', 200)->nullable();
            $table->string('nilai_project_perbulan', 100)->nullable();
            $table->string('nama_key_kontak_client', 50)->nullable();
            $table->string('jabatan_pic_client', 50)->nullable();
            $table->string('no_hp_pic_client', 50)->nullable();
            $table->string('nama_pic_gsd', 100)->nullable();
            $table->string('drive_kontrak', 255)->nullable();
            $table->string('amandemen', 50)->nullable();
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
