<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
	protected $fillable = [
        'status','accountant_id'
    ];    
}