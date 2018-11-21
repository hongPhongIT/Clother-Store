<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment() {
        
        return $this->hasMany('App\Comment');
        
    }

    public function accounts() {


        return $this->hasMany('App\LinkedSocialAccount');

    }
    public function bills(){
        return $this->hasMany('App\Bill');

    }


}
