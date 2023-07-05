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
            'nama',
            'nik',
            'lokasi_kerja',
            'kontrak',
            'telepon',
            'gedung_id',
            'bloman'
        ]);
    }
}
