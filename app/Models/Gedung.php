<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    public $table = 'gedung';

    protected $fillable = [
        'nama_area',
        'nama_witel',
        'alamat',
        'nama_gedung',
        'koordinat',
        'total_petugas'
        ];
}
