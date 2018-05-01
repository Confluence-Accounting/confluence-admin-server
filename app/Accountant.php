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
            return $this->hasMany('App\Address');
        }
        
        public function invoices()
        {
            return $this->hasMany('App\Invoice');
        }
}
