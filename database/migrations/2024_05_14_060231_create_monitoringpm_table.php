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
        Schema::create('monitoringpm', function (Blueprint $table) {
            $table->id();
            $table->string('unit_kerja', 255)->nullable();
            $table->string('customer', 255)->nullable();
            $table->string('segmen', 255)->nullable();
            $table->string('nama_project', 255)->nullable();
            $table->string('nilai_kontrak', 255)->nullable();
            $table->string('nilai_perbulan', 255)->nullable();
            $table->string('jumlah_hk', 255)->nullable();
            $table->string('jumlah_security', 255)->nullable();
            $table->string('jumlah_driver', 255)->nullable();
            $table->string('jumlah_admin', 255)->nullable();
            $table->string('jumlah_teknisi', 255)->nullable();
            $table->string('total_pkwt', 255)->nullable();
            $table->date('awal_kontrak')->nullable();
            $table->date('akhir_kontrak')->nullable();
            $table->string('sisa_kontrak')->nullable();
            $table->string('tahun_pengadaan')->nullable();
            $table->string('sph')->nullable();
            $table->string('boq')->nullable();
            $table->string('bakn')->nullable();
            $table->string('jib')->nullable();
            $table->string('kontrak')->nullable();
            $table->string('nd_pengajuan')->nullable();
            $table->string('nd_persetujuan')->nullable();
            $table->string('pkwt')->nullable();
            $table->string('crm_np')->nullable();
            $table->string('crm_nd')->nullable();
            $table->string('crm_cc')->nullable();
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
        Schema::dropIfExists('monitoringpm');
    }
};
