<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillabel = [
        'name', 'thumb_url', 'description'
    ];
    
    protected $hidden = [
        
    ];
    
    public function store() {
        return $this->belongsTo('App\Store');
    }
}
