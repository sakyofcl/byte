<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment_methods extends Model
{
    protected $fillable = [
        'method'
    ];
    public $timestamps = false;
}
