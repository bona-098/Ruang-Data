<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\ToModel;

class KaryawanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $tgl_lahir = null;
        if (!empty($row[4])) {
            $dateParts = explode('/', $row[4]); // Ganti '-' dengan simbol pemisah yang sesuai
            if (count($dateParts) === 3) {
                $tgl_lahir = Carbon::create($dateParts[2], $dateParts[1], $dateParts[0])->toDateString();
            }
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
