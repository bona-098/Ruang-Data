<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectnlop extends Model
{
    use HasFactory;
    public $table = "projectnlop";
    protected $fillable = [
        'customer',
        'id_crm',
        'witel',
        'nama_project',
        'kategori',
        'skema',
        'nilai_project',
        'sudah_akru',
        'belum_akru',
        'progress_ml',
        'progress_mi',
        'target_deal',
        'keterangan',
        'due_date',
        'tahap',
        'akru'
    ];
}
