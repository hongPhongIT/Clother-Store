<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity', 'size', 'product_id','bill_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    
    public function bill(){
        return $this->belongsTo('App\Bill');
    }
        public function product() {
                    return $this->belongsTo('App\Product', 'product_id', 'id');

        }
}
