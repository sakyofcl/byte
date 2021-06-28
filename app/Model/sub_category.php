<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    protected $fillable = [
        'name', 'catid'
    ];
    public $primaryKey = "subid";
    public $timestamps = false;
}
