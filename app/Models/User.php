<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);  //Al definir esta función, hacemos la relación entre el teléfono y el usuario.
        //En caso de no respetar la convención de nombres, se puede especificar el campo vinculado como clave foránea (Phone::class, 'user_id', 'id')
    }

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class); //Definición de la relación uno es a muchos.
    }

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withPivot('added_by');
    }

    // Relación de paso (1 a 1), el teléfono está relacionado con la SIM por lo tanto, al estar el usuario también relacionado al teléfono, podemos asociar usuario y SIM

    public function phoneSim() : HasOneThrough
    {
        return $this->hasOneThrough(Sim::class, Phone::class); // Si no se respeta la convención de nombres, se deben llenar los ID extras
    }

    public function veterinaryVisit() : HasManyThrough
    {
        return $this->hasManyThrough(VeterinaryVisit::class, Pet::class);
    }

    //relación polimórfica, un usuario tiene una imagen, pero la clase imagen también puede ser utilizada por la clase Post

    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
