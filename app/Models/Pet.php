<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class); // Definición para la relación uno es a muchos, una mascota pertenece a un usuario.
    }

    public function veterinaryVisit() : HasMany
    {
        return $this->hasMany(VeterinaryVisit::class);
    }
}
