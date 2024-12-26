<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $with = ['city'];
    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }
}
