<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactie extends Model
{
    protected $fillable = [
       'accountnumber','customername','amount','date' 
    ];    
}
