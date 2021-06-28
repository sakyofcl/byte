<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'oid',
        'name',
        'email',
        'phone',
        'note',
        'status',
        'date'
    ];
    public $primaryKey = "oid";
    public $timestamps = false;

    public function Ship_address()
    {
        return $this->hasOne('App\Model\Ship_address', 'oid');
    }
    public function Orders_payment()
    {
        return $this->hasOne('App\Model\Orders_payment', 'oid');
    }
    public function Orders_products()
    {
        return $this->hasMany('App\Model\Orders_products', 'oid');
    }
    public function Order_slip()
    {
        return $this->hasOne('App\Model\Orders_slip', 'oid');
    }
}
