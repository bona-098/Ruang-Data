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
            $table->string('customer', 50)->nullable();
            $table->string('witel', 50)->nullable();
            $table->string('nama_project', 50)->nullable();
            $table->string('kategori', 255)->nullable();
            $table->string('skema', 50)->nullable();
            $table->string('nilai_project', 255)->nullable();
            $table->string('sudah_akru', 255)->nullable();
            $table->string('sisa_belum_akru', 255)->nullable();
            $table->string('progress_ml', 255)->nullable();
            $table->string('progress_mi', 255)->nullable();
            $table->string('target_deal', 255)->nullable();
            $table->string('keterangan', 255)->nullable();
            $table->string('tahap', 255)->nullable();
            $table->string('akru', 255)->nullable();
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
