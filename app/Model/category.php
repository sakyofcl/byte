<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    protected $fillable = [
        'name'
    ];
    public $primaryKey = "catid";
    public $timestamps = false;

    public function subCategory()
    {
        return $this->hasMany('App\Model\sub_category', 'catid');
    }
}
