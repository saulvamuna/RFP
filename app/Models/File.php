<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'extension',
        'path',
        'id_petition'
    ];

    public function petition():BelongsTo
    {
        return $this->belongsTo(Petition::class);
    }
}
