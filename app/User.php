<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'role', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::created(
            function ($user){
                $user->profile()->create([
                    'role'=> $user->role,
                ]);
                $user->schedule()->create([
                    'id'=> $user->profile->id,
                ]);

            }
    );
    }

    public function posts(){
        return $this->hasMany(Post::class)->orderBy("created_at", "DESC");
    }

    public function medicines(){
        return $this->hasMany(Medicine::class)->orderBy("created_at", "DESC");
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function schedule(){
        return $this->hasOne(Schedule::class);
    }


}
