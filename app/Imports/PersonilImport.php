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
            'area'=> $row[1],
            'witel'=> $row[2],
            'jabatan'=> $row[3],            
        ]);
    }
}
