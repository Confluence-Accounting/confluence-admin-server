<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
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
