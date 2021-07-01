<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product_more_images extends Model
{
    protected $fillable = ['img_id', 'img_name', 'pid'];
    public $primaryKey = "img_id";
    public $timestamps = false;
}
