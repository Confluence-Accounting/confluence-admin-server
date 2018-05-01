<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kmo extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
	protected $fillable = [
        'vat','name'
    ];    
        
        public function addresses()
        {
            return $this->belongsToMany('App\Address');
        }
}
