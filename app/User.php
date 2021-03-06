<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_User', 'email_User', 'password','phone_User','confirmate_User',
        'code_Confirmation_User','type_User','imagen_User'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function collaborative_process(){
      return $this->hasMany('App\Collaborative_Process');
    }

    public function institutions(){
      return $this->hasMany('App\Institution');
    }
}
