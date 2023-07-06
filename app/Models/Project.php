<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $table = "project";
    protected $fillable = [
        'customer',
        'witel',
        'nama_project',
        'kategori',
        'skema',
        'nilai_project',
        'sudah_akru',
        'sisa_belum_akru',
        'progress_ml',
        'progress_mi',
        'target_deal',
        'keterangan',
        'tahap',
        'akru',
    ];
}
