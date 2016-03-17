<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'ingredient', 'origin_price', 'price', 'thumb_url'
    ];
    
    protected $hidden = [
        
    ];
    
    public function group() {
        return $this->belongsTo('App\Group');
    }
}
