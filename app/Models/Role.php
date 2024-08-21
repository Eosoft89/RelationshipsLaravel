<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users() : BelongsToMany
    {
        //Relación muchos es a muchos
        return $this->belongsToMany(User::class)->withPivot('added_by'); //Esto es suficiente si se respeta la convención de nombres, sino, se puede definir con (User::class, 'role_user', 'user_id', 'role_id')
        //withPivot('nombreCampo') es para traer data adicional de la tabla de relación. Traerla es opcional.
    }
}
