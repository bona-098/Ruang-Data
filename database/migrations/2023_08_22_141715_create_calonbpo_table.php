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
        Schema::create('calonbpo', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255)->nullable();
            $table->string('pendidikan', 255)->nullable();
            $table->string('jurusan', 255)->nullable();
            $table->string('umur', 255)->nullable();
            $table->string('domisili', 255)->nullable();
            $table->string('nomor_hp', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('cv')->nullable();
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
        Schema::dropIfExists('calonbpo');
    }
};
