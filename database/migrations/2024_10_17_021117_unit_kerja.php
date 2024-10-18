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
        Schema::create('unit_kerja', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama', 50)->nullable();
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key jika id_unit_kerja berelasi dengan tabel lain
            // $table->foreign('id_unit_kerja')->references('id')->on('unit_kerja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_kerja');
    }
};
