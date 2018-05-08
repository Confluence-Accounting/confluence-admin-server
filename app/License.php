<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class License extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
	protected $fillable = [
        'status','accountant_id'
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
