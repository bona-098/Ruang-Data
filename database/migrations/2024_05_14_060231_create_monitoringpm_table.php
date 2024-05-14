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
            $table->string('total_pkwt')->nullable();
            $table->string('tanggal_kontrak')->nullable();
            $table->string('tahun_pengadaan')->nullable();
            $table->string('sph')->nullable();
            $table->string('boq')->nullable();
            $table->string('bakn')->nullable();
            $table->string('jib')->nullable();
            $table->string('kontrak')->nullable();
            $table->string('nd_pengajuan')->nullable();
            $table->string('nd_persetujuan')->nullable();
            $table->string('pkwt')->nullable();
            $table->string('crm')->nullable();
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
