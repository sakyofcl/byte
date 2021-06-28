<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders_products extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'pid',
        'qty'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
