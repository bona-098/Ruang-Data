<?php
// app/Models/LogActivities.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogActivities extends Model
{
    use HasFactory;

    protected $table = 'activity_log'; // Pastikan sesuai dengan nama tabel yang ada di database

    protected $guarded = ['id'];

    /**
     * Mendapatkan data user yang terkait dengan log activity.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
