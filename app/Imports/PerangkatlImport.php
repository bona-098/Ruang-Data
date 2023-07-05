<?php

namespace App\Imports;

use App\Models\Perangkat;
use Maatwebsite\Excel\Concerns\ToModel;

class PerangkatlImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Perangkat([
            //
        ]);
    }
}
