<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id', 'wilaya_id',
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
    
    public function setPasswordsAttribute($password)
        {
            $this->attributes['password']= Hash::make($password);
        }   

    public function role()
{
    return $this->belongsTo('App\Models\Role');
}
    public function wilaya(){
        return $this->belongsTo('App\Models\Wilaya');
}
    


/** 
 * chack of the user has a role
 * @param string $role
 * return bool
*/
    public function hasRole(string $role)
    {
        return null !== $this->role()->where('name',$role)->first();
    }

/** 
 * chack of the user has any given role
 * @param array $role
 * return bool
*/    

    


}
