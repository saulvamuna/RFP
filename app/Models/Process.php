<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'nextProcess',
        'beforeProcess',
    ];

    public function petitions():HasMany
    {
        return $this->hasMany(Petition::class);
    }
}
