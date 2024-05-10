<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory;

    public function zone():BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }

    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
}
