<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product_brand extends Model
{
    protected $fillable = ['brand'];
    public $primaryKey = "brand_id";
    public $timestamps = false;
}
