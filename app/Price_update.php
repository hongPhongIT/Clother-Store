<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_update extends Model
{
    protected $fillable = [
        'product_id', 'unit_price','promotion_price',
    ];

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
