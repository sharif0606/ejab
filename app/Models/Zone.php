<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    public function divisions(){
        return $this->hasMany('Division');
    }
    public function country(){
        return $this->belongsTo('App\Models\Country');
    }
}
