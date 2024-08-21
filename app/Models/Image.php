<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Relaciones polimórficas, en este caso, la Imagen puede estar relacionada tanto a un usuario como a un Post, por lo que no se puede
    //establecer un ID foráneo en la tabla (habrían dos posibilidades de atributo dentro de la tabla Image, 'user_id' o 'post_id')
    //Para aplicar entonces una relación polimórfica, se establecen 2 campos dentro del modelo, 'imageable_id', con el id de la relación, e 'imageable_type' con el tipo de relación (post o usuario)
    //'nombreClase'+able es la nomenclatura estándar

    public function imageable() : MorphTo
    {
        return $this->morphTo(); // si respetamos la convención de nombres, no debemos especificar nada más, sino, habría que poner los campos morph_id y morph_type
    }
}
