<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_key extends Model
{
    protected $fillable = [
        'id',
        'name',
        'key'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
