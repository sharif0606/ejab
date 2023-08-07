<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AiDealer extends Model
{
    use HasFactory, SoftDeletes;
    public function division(){
        return $this->belongsTo('App\Models\Division','division_id','id');
    }
    public function upazilla(){
        return $this->belongsTo('App\Models\Upazilla');
    }
    public function union(){
        return $this->belongsTo('App\Models\Union');
    }
    
    public function district(){
        return $this->belongsTo('App\Models\District','district_id','id');
    }
    
    public function zone(){
        return $this->belongsTo('App\Models\Zone','zone_id','id');
    }
    
}
