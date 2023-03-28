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
        Schema::create('piutangbill', function (Blueprint $table) {
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
            $table->string('total_piutang');
            $table->string('current')->nullable();
            $table->string('1-3bulan');
            $table->string('4-6bulan');
            $table->string('7-12bulan');
            $table->string('lebih12bulan');
            $table->string('total');
            $table->string('group');
            $table->string('customer_nametwo');
            $table->string('fcbp_telkom');
            $table->string('kategori_bill');
            $table->string('antrian_bayar')->nullable();
            $table->string('pic')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('target_cash')->nullable();
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
        Schema::dropIfExists('piutangbill');
    }
};
