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
            'Id_gedung' => $row[0],
            'nama_gedung' => $row[1],
            'nama_area' => $row[2],
            'nama_witel' => $row[3],
            'alamat' => $row[4],
            'koordinat' => $row[5],
            'luasan' => $row[6],
            'total_petugas' => $row[7]
        ]);        
    }
}
