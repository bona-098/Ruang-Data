<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;
class ProjectImport implements ToModel
{
    private $imported = false;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!$this->imported) {
            // Catat aktivitas tambah data mitra ke dalam log hanya sekali
            LogActivities::create([
                'user_id' => auth()->id(), // ID pengguna yang melakukan aksi (jika menggunakan autentikasi)
                'activity' => 'Mengimport Data Karyawan', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
                'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
            ]);

            $this->imported = true;
        }
        return new Project([
            'customer' => $row[0],
            'witel' => $row[1],
            'nama_project' => $row[2],
            'kategori' => $row[3],
            'skema' => $row[4],
            'nilai_project' => $row[5],
            'sudah_akru' => $row[6],
            'sisa_belum_akru' => $row[7],
            'progress_ml' => $row[8],
            'progress_mi' => $row[9],
            'target_deal' => $row[10],
            'keterangan' => $row[11],
            'tahap' => $row[12],
            'akru' => $row[13]
        ]);
    }
}
