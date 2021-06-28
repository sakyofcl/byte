<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders_payment extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'payment_id'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
