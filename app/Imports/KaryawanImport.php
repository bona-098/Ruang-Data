<?php

namespace App\Imports;

use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;
class KaryawanImport implements ToModel
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
        $tgl_lahir = null;
        if (!empty($row[4])) {
            // Ubah format "general" menjadi tipe data tanggal
            $tgl_lahir = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]))->toDateString();
        }
        return new Karyawan([
            'nik' => $row[0],
            'no_hp' => $row[1],
            'nama_karyawan' => $row[2],
            'jenis_kelamin' => $row[3],
            'tgl_lahir' => $tgl_lahir,
            'kota_lahir' => $row[5],
            'agama' => $row[6],
            'jalan' => $row[7],
            'unit_kerja' => $row[8],
            'loker' => $row[9],
            'jabatan' => $row[10],
            'band_kelas_posisi' => $row[11],
        ]);
    }
}
