<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Tabla que se relaciona con otras de forma polimórfica a través de la tabla de relación 'taggable'

    //Es necesario hacer una función para cada tabla/clase que se relacione a Tag

    public function videos() : MorphToMany{
        return $this->morphedByMany(Video::class, 'taggable'); //se usa morphedByMany
    }

    public function users() : MorphToMany{
        return $this->morphedByMany(User::class, 'taggable');
    }

}
