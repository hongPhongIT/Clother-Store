<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_photo extends Model
{
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 
        'product_id',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
