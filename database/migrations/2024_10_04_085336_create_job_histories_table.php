    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up()
        {
            Schema::create('job_histories', function (Blueprint $table) {
                $table->id();
                $table->foreignId('karyawan_id')->nullable()->constrained('karyawan')->onDelete('set null'); // Pastikan tabel karyawan sesuai
                $table->string('nama', 50)->nullable();
                $table->date('tgl_jabat')->nullable();
                $table->string('lokasi', 50)->nullable();
                $table->string('band', 50)->nullable();
                $table->string('lampiran', 50)->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('job_histories');
        }
    };
