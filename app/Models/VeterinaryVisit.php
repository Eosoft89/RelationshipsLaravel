<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VeterinaryVisit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pet() : BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

}
