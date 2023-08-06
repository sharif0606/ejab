<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model{
    use HasFactory;
    
    public function postoffices(){
        return $this->hasMany('App\Models\Postoffice');
    }
    public function division(){
        return $this->belongsTo('App\Models\Division','division_id','id');
    }
}
