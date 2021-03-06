<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name','amount','vat','accountant_id'
    ];
}
