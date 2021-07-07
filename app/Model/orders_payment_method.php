<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class orders_payment_method extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'method'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
