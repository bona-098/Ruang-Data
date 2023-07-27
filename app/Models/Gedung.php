<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    public $table = 'gedung';

    protected $fillable = [
        'Id_gedung',
        'nama_gedung',
        'nama_area',
        'nama_witel',
        'kelas',
        'alamat',
        'koordinat',
        'total_petugas',
        'luasan'
        ];
}
