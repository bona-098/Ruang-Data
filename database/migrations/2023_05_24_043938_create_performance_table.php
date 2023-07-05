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
        Schema::create('performance', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable();
            $table->string('tahun')->nullable();
            $table->string('bulan')->nullable();
            $table->string('area')->nullable();
            $table->string('target_rkap')->nullable();
            $table->string('target_rkm')->nullable();
            $table->string('ach')->nullable();
            $table->string('foto')->nullable();
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
        //
    }
};
