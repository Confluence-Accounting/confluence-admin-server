<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
	protected $fillable = [
        'status'
    ];    
        public function bookkeeping()
        {
            return $this->hasOne('App\Bookkeeping');
        }
        
        public function accountant()
        {
            return $this->belongsTo('App\Accountant');
        }
}
