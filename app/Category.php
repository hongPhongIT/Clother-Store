<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model {

    use Notifiable;
    
    protected $fillable = [
        'parentid','name','description','is_delete'
    ];
    public function parent() {
        return $this->belongsTo('App\Category','parentid','id');
    }
    public function children() {
        return $this->hasMany('App\Category','parentid','id');
    }
}
