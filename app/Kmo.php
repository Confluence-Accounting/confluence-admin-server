<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kmo extends Model
{
	protected $fillable = [
        'vat','name'
    ];    
        
        public function addresses()
        {
            return $this->belongsToMany('App\Address');
        }
}
