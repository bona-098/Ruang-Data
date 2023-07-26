<?php

namespace App\Imports;

use App\Models\Sales;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\LogActivities; // Import model MitraActivityLog
use Carbon\Carbon;
class SalesImport implements ToModel
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
        return new Sales([
            'unit_kerja'=> $row[0],
            'status_revenue'=> $row[1],
            'customer'=> $row[2],
            'segment'=> $row[3],
            'nama_project'=> $row[4],
            'lokasi_gedung'=> $row[5],
            'jenis_pekerjaan'=> $row[6],
            'portfolio'=> $row[7],
            'progress_project'=> $row[8],
            'status_project'=> $row[9],
            'proses_pendekatan_customer'=> $row[10],
            'visit'=> $row[11],
            'sph'=> $row[12],
            'bakn'=> $row[13],
            'spk'=> $row[14],
            'masa_project'=> $row[15],
            'jumlah_man_power'=> $row[16],
            'tgl_sp'=> $row[17],
            'no_sp'=> $row[18],
            'jenis_kontrak'=> $row[19],
            'tgl_mulai_project'=> $row[20],
            'tgl_akhir_project'=> $row[21],
            'sisa_kontrak'=> $row[22],
            'nilai_total_project'=> $row[23],
            'nilai_project_pertahun'=> $row[24],
            'nilai_project_perbulan'=> $row[25],
            'nama_key_kontak_client'=> $row[26],
            'jabatan_pic_client'=> $row[27],
            'no_hp_pic_client'=> $row[28],
            'nama_pic_gsd'=> $row[29],
            'drive_kontrak'=> $row[30],
            'amandemen'=> $row[31],
            'keterangan'=> $row[32],
        ]);
    }
}
