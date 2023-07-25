<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTable extends Migration
{
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Hapus properti auto_increment pada kolom ini
            $table->string('activity')->notnull();
            $table->timestamp('login_at')->notnull();
            $table->timestamps();

            // Index untuk kolom user_id
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_log');
    }
}