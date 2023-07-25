<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('log_name', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->text('properties')->nullable();
            $table->unsignedBigInteger('subject_id');
            $table->string('subject_type', 100);
            $table->unsignedBigInteger('causer_id')->nullable();
            $table->string('causer_type', 100)->nullable();
            $table->timestamps();

            // Nama indeks disetel menjadi 'activity_log_index'
            $table->index(['log_name', 'subject_id', 'subject_type', 'causer_id', 'causer_type'], 'activity_log_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_log');
    }
};
