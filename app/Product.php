<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use FullTextSearch;
    //Function searchable
    protected $searchable = [
        'name',
        'description'
    ];


    protected $fillable = [
        'name', 'description',  'unit', 'category_id', 'is_delete', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function product_photos() {

        return $this->hasMany('App\Product_photo');
    }

    public function sizes() {

        return $this->belongsToMany('App\Size','size_product');
    }
    
    public function size_quantity() {

        return $this->hasMany('App\Size_product');
    }
    
    public function image() {
        return $this->product_photos()->get()->last();
    }

     public function price_updates() {
        return $this->hasMany('App\Price_update');
    }
    
    public function last_price() {
        return $this->price_updates()->get()->last();
    }
}
