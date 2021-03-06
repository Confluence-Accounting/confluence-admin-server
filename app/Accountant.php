<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accountant extends Model
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
        
        public function invoices()
        {
            return $this->hasMany('App\Invoice');
        }
        
         public function employees()
        {
            return $this->hasMany('App\Employee');
        }
        
        public function licenses()
        {
            return $this->hasMany('App\License');
        }
}
