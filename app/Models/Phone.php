<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
        //Función para vincular las clases user y phone (1 a 1), si no se utiliza la convención de nombres, se puede especificar mediante (User::class, 'id', 'user_id')
    }

    public function sim() : HasOne
    {
        return $this->hasOne(Sim::class);
    }
}
