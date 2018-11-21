<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment', 'product_id', 'user_id', 'parentid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user() {

        return $this->belongsTo('App\User');
    }

}
