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
        Schema::create('projectlop', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_pekerjaan');
            $table->string('lokasi');
            $table->string('witel');
            $table->string('fm');
            $table->string('status_lop');
            $table->string('nilai');
            $table->string('nilai_sbo');
            $table->string('nilai_kontrak_sbo');
            $table->string('nilai_juskeb');
            $table->string('nilai_drm')->nullable();
            $table->string('nilai_rekon');
            $table->string('progres_ml');
            $table->string('progres_mi');
            $table->string('nilai_progres');
            $table->string('nilai_progres_mi');
            $table->string('margin');
            $table->string('rekon_digir');
            $table->string('bakom_laut');
            $table->string('nilai_mitra');
            $table->string('mitra');
            $table->date('tanggal_pelimpahan');
            $table->string('jangka_waktu');
            $table->string('status_pekerjaan');
            $table->string('status_projek');
            $table->string('keterangan');
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
        Schema::dropIfExists('projectlop');
    }
};
