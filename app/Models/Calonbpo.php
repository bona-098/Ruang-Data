<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calonbpo extends Model
{
    use HasFactory;
    public $table = 'calonbpo';
    protected $fillable = [
    'nama',
    'pendidikan',
    'jurusan',
    'umur',
    'domisili',
    'nomor_hp',
    'email',
    'cv'
    ];
}
