<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    public $table = 'mitra';
    protected $fillable = [
    'nama_vendor',
    'domisili',
    'kategori',
    'nilai_asses',
    'status'
    ];
}
