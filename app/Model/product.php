<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name',
        'stock',
        'price',
        'brand',
        'model',
        'pcode',
        'description',
        'height',
        'weight',
        'catid',
        'subid',
        'videourl',
        'image',
        'created_at',
        'editerdesc'
    ];
    public $primaryKey = "pid";
    public $timestamps = false;
}
