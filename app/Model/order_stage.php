<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_stage extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'stage'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
