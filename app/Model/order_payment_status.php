<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_payment_status extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'status'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
