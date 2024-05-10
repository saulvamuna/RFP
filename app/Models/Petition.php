<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petition extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_RP',
        'type_SS',
        'type_CO',
        'type_RC',
        'suggested_suppliers',
        'requirements_sst',
        'which_requires',
        'as_required',
        'for_requires',
        'when_required',
        'acceptability_date',
        'id_user',
        'id_process',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function process():BelongsTo
    {
        return $this->belongsTo(Process::class, 'id_process');
    }

    public function files():HasMany
    {
        return $this->hasMany(Files::class);
    }
}
