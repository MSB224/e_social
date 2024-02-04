<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// 
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;


class User extends Authenticatable implements LaratrustUser

{
    use HasApiTokens, HasFactory, Notifiable;
     use HasRolesAndPermissions;

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];







    // the all relation between this table and all reste table

    // for table photo7
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
    // end this relation
    // for table publication
    public function publication(): HasMany
    {
        return $this->hasMany(Publication::class);
    }
    // end this relation

    // for table profile
    public function profile(): HasMany
    {
        return $this->hasMany(Profil::class);
    }
    // end this relation

    // for table videos

    public function videos(): HasMany
    {
        return $this->hasMany(Videos::class);
    }

    // end this relation

    // for table fichier

    public function fichier(): HasMany
    {
        return $this->hasMany(Fichier::class);
    } 
}
