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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('customer')->nullable();
            $table->string('id_crm')->nullable();
            $table->string('witel')->nullable();
            $table->string('nama_project')->nullable();
            $table->string('kategori')->nullable();
            $table->string('skema')->nullable();
            $table->string('nilai_project')->nullable();
            $table->string('sudah_akru')->nullable();
            $table->string('sisa_belum_akru')->nullable();
            $table->string('progress_ml')->nullable();
            $table->string('progress_mi')->nullable();
            $table->string('target_deal')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('tahap')->nullable();
            $table->string('akru')->nullable();
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
