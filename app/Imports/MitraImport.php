<?php

namespace App\Imports;

use App\Models\Mitra;
use Maatwebsite\Excel\Concerns\ToModel;

class MitraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mitra([
            'nama_vendor' => $row[0],
            'domisili' => $row[1],
            'kategori' => $row[2],
            'nilai_asses' => $row[3],
            'status' => $row[4],
        ]);
        
    }
}
