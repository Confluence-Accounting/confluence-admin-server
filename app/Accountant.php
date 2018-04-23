<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
	protected $fillable = [
        'vat','name'
    ];    
        public function adres()
        {
            return $this->hasOne('App\Adres');
        }
}
