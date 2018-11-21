<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size_product extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'size_product';
    protected $fillable = [
        'product_id', 'product_id', 'size_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    
    public function size()
    {
        return $this->belongsToMany('App\Size');
    }
    
     public function product()
    {
        return $this->belongsTo('App\Product','size_product');
    }
}
