<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personil extends Model
{
    use HasFactory;
    public $table = 'personil';

    protected $fillable = [
        'nama',
        'telepon',
        'nik',
        'email',
        'gedung_id'
        ];
    
        /**
         * Get the gedung that owns the personil
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function gedung()
        {
            return $this->belongsTo(Gedung::class, 'gedung_id');
        }
}
