<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ps extends Model
{
    use HasFactory;
    public $table = 'ps';
    protected $fillable = [
    'target',
    'bulan'
    ];
}
