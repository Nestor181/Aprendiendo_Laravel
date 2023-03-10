<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Profile;
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

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
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    
    //Relacion uno a uno
    public function profile(){
        //$profile = Profile::where('user_id', $this->id)->first();

        return $this->hasOne(Profile::class);
    }

    //Relacion uno a muchos(V.42)
    public function posts(){
        return $this->hasMany('App\Models\Post');  //Metodo para recuperar la coleccion de post que pertenecen a este usurio(V.42)
    }

    public function videos(){
        return $this->hasMany('App\Models\Video'); 
    }

    //Relacion muchos a muchos (V.43)
    public function roles(){
        return $this->belongsToMany('App\Models\Role'); 
    }
    
     //Relacion 1:1 polimorfica (V.44)
     public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Relacion 1:m con comments (V.45)
    public function comments(){
        return $this->hasMany('App\Model\Comment');
    }

}

