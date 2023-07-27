<?php

namespace App\Imports;

use App\Models\Personil;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;
class PersonilImport implements ToModel
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
        return new Personil([
            'nama'=> $row[0], 
            'area'=> $row[1],
            'witel'=> $row[2],
            'jabatan'=> $row[3],            
        ]);
    }
}
