<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookkeeping extends Model
{
	protected $fillable = [
        'name'
        ];    
        
        
        public function license()
        {
            return $this->belongsTo('App\License');
        }
   
}
