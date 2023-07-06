<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project([
            'customer' => $row[0],
            'witel' => $row[1],
            'nama_project' => $row[2],
            'kategori' => $row[3],
            'skema' => $row[4],
            'nilai_project' => $row[5],
            'sudah_akru' => $row[6],
            'sisa_belum_akru' => $row[7],
            'progress_ml' => $row[8],
            'progress_mi' => $row[9],
            'target_deal' => $row[10],
            'keterangan' => $row[11],
            'tahap' => $row[12],
            'akru' => $row[13]
        ]);
    }
}
