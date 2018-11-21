<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    
    public function locations()
    {
        return $this->belongsTo('App\Location');
    }
}