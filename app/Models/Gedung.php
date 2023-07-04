<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    public $table = 'gedung';

    protected $fillable = [
        'nama_gedung',
        'nama_area',
        'nama_witel',
        'alamat',
        'koordinat',
        'total_petugas',
        'luasan'
        ];
}
