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
    public function zone(){
        return $this->belongsTo('App\Models\Zone','zone_id','id');
    }
}
