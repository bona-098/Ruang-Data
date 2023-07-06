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
