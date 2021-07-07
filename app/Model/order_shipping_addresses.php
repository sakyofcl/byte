<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_shipping_addresses extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'street',
        'city',
        'zip',
        'province',
    ];
    public $primaryKey = "oid";
    public $timestamps = false;
}
