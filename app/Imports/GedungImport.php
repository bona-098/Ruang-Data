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
            'kelas' => $row[4],
            'alamat' => $row[5],
            'koordinat' => $row[6],
            'luasan' => $row[7],
            'total_petugas'=> $row[8]
        ]);        
    }
}
