<?php

namespace App\Imports;

use App\Models\Gedung;
use Maatwebsite\Excel\Concerns\ToModel;

class GedungImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Gedung([
            'nama_gedung' => $row[0],
            'nama_area' => $row[1],
            'nama_witel' => $row[2],
            'alamat' => $row[3],
            'koordinat' => $row[4],
            'luas' => $row[5],
            'total_petugas' => $row[6]
        ]);
        
    }
}
