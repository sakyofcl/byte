<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment_methods extends Model
{
    protected $fillable = [
        'payment_id',
        'name'
    ];
    public $primaryKey = "payment_id";
    public $timestamps = false;

    public function Orders_payment()
    {
        return $this->hasMany('App\Model\Orders_payment', 'payment_id');
    }
}
