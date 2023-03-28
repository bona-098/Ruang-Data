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
        Schema::create('piutangunbill', function (Blueprint $table) {
            $table->id();
            $table->string('assignment');
            $table->string('doc_number');
            $table->date('doc_date');
            $table->date('post_date');
            $table->string('amount');
            $table->string('column');
            $table->string('text');
            $table->string('account');
            $table->string('ba');
            $table->string('gl');
            $table->string('customer_name');
            $table->string('kategori_pu');
            $table->string('portfolio');
            $table->string('segment_customer');
            $table->string('customer_name_two');
            $table->string('fcbp_telkom');
            $table->string('status');
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
        Schema::dropIfExists('piutangunbill');
    }
};
