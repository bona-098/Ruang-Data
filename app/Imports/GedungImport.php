<?php

namespace App\Imports;

use App\Models\Gedung;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;

class GedungImport implements ToModel
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
                'activity' => 'Mengimport Data Gedung', // Aktivitas yang dilakukan (misalnya 'tambah_mitra')
                'login_at' => Carbon::now('Asia/Singapore'), // Waktu aktivitas dilakukan
            ]);

            $this->imported = true;
        }

        // Buat objek Gedung
        return new Gedung([
            'Id_gedung' => $row[0],
            'nama_gedung' => $row[1],
            'nama_area' => $row[2],
            'nama_witel' => $row[3],
            'kelas' => $row[4],
            'alamat' => $row[5],
            'koordinat' => $row[6],
            'luasan' => $row[7],
            'total_petugas'=> $row[8]
        ]);        
    }
}
