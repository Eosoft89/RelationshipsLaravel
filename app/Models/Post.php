<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relación polimórfica, un post tendrá una imagen (que también puede ser utilizada por un usuario)
    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable'); //si no se respeta la convención de nombres, habría que especificar los nombres de los atributos id y type
        //en el type, es necesario pasarle la clase o el string con la dirección, en este caso App\Models\Post
    }
}
