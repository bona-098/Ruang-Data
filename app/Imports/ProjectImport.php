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
            'id_crm' => $row[1],
            'witel' => $row[2],
            'nama_project' => $row[3],
            'kategori' => $row[4],
            'skema' => $row[5],
            'nilai_project' => $row[6],
            'sudah_akru' => $row[7],
            'sisa_belum_akru' => $row[8],
            'progress_ml' => $row[9],
            'progress_mi' => $row[10],
            'target_deal' => $row[11],
            'keterangan' => $row[12],
            'start_date' => $row[13],
            'end_date' => $row[14],
            'tahap' => $row[15],
            'akru' => $row[16]
        ]);
    }
}
