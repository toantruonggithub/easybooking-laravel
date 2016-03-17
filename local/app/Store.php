<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'description', 'address', 'working_time', 'thumb_url'
    ];
    
    protected $hidden = [
        
    ];
    
    public function owner() {
        return $this->belongsTo('App\User');
    }
}
