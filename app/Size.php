<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quanlity', 'size', 'product_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    
    public function product()
    {
        return $this->belongsToMay('App\Product', 'size_product');
    }
    
    public function size_product()
    {
        return $this->hasmany('App\Size_product');
    }
    
}
