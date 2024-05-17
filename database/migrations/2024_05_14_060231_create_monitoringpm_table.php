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
            $table->string('unit_kerja')->nullable();
            $table->string('customer')->nullable();
            $table->string('segmen')->nullable();
            $table->string('nama_project')->nullable();
            $table->string('nilai_kontrak')->nullable();
            $table->string('nilai_perbulan')->nullable();
            $table->string('jumlah_hk')->nullable();
            $table->string('jumlah_security')->nullable();
            $table->string('jumlah_driver')->nullable();
            $table->string('jumlah_admin')->nullable();
            $table->string('jumlah_teknisi')->nullable();
            $table->string('total_pkwt')->nullable();
            $table->date('awal_kontrak')->nullable();
            $table->date('akhir_kontrak')->nullable();
            $table->string('sisa_kontrak')->nullable();
            $table->string('tahun_pengadaan')->nullable();
            $table->text('sph')->nullable();
            $table->text('boq')->nullable();
            $table->text('bakn')->nullable();
            $table->text('jib')->nullable();
            $table->text('kontrak')->nullable();
            $table->text('nd_pengajuan')->nullable();
            $table->text('nd_persetujuan')->nullable();
            $table->text('pkwt')->nullable();
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
