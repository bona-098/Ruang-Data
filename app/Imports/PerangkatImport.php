<?php

namespace App\Imports;

use App\Models\Perangkat;
use Maatwebsite\Excel\Concerns\ToModel;

class PerangkatImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Perangkat([
            'id_group' => $row[0],
            'id_area' => $row[1],
            'id_unit' => $row[2],
            'nama_unit' => $row[3],
            'id_witel' => $row[4],
            'nama_witel' => $row[5],
            'id_lokasi' => $row[6],
            'nama_lokasi' => $row[7],
            'id_gedung' => $row[8],
            'nama_gedung' => $row[9],
            'id_kelas' => $row[10],
            'id_room' => $row[11],
            'id_lantai' => $row[12],
            'nama_lantai' => $row[13],
            'jid' => $row[14],
            'nama_jenis' => $row[15],
            'kid' => $row[16],
            'kategori' => $row[17],
            'skid' => $row[18],
            'sub_kategori' => $row[19],
            'nama_perangkat' => $row[20],
            'is_ceklis' => $row[21],
            'merk' => $row[22],
            'satuan' => $row[23],
            'jumlah' => $row[24],
            'kapasitas' => $row[25],
            'no_seri' => $row[26],
            'type' => $row[27],
            'tahun' => $row[28],
            'kondisi' => $row[29],
            'milik' => $row[30],
            'keterangan' => $row[31],
            'id_perangkat' => $row[32],
        ]);
    }
}
