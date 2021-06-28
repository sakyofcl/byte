<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders_slip extends Model
{
    protected $fillable = [
        'id',
        'oid',
        'image'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
