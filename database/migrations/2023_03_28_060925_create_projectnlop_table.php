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
        Schema::create('projectnlop', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->string('id_crm');
            $table->string('witel');
            $table->string('nama_project');
            $table->string('kategori');
            $table->string('skema');
            $table->string('nilai_project');
            $table->string('sudah_akru');
            $table->string('belum_akru');
            $table->string('progress_ml');
            $table->string('progress_mi')->nullable();
            $table->string('target_deal')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('due_date')->nullable();
            $table->string('tahap');
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
        Schema::dropIfExists('projectnlop');
    }
};
