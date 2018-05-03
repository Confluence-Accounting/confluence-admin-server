<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bookkeeping extends Model
{
        use SoftDeletes;

        protected $dates = ['deleted_at'];
	protected $fillable = [
        'name'
        ];    
        
        public function kmo()
        {
            return $this->belongsTo('App\Kmo');
        }
        
       public function license()
        {
            return $this->belongsTo('App\License');
        }
}
