<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total', 'payment', 'quanlity','status','user_id','address','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function bill_details(){
        return $this->hasMany('App\Bill_detail');
    }
}
