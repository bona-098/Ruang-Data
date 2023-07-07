<?php

namespace App\Imports;

use App\Models\Personil;
use Maatwebsite\Excel\Concerns\ToModel;

class PersonilImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Personil([
            'nama'=> $row[0], 
            'nik'=> $row[1],
            'lokasi_kerja'=> $row[2],
            'kontrak'=> $row[3],
            'telepon'=> $row[4],
            'gedung_id'=> $row[5]
        ]);
    }
}
