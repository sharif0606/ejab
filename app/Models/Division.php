<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    public function districts(){
        return $this->hasMany('App\Models\District');
    }
    public function country(){
        return $this->belongsTo('App\Models\Country','country_id','id');
    }
}
