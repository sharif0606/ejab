<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cattle extends Model
{
    use HasFactory, SoftDeletes;
    
    public function division(){
        return $this->belongsTo('App\Models\Division','division_id','id');
    }
    
    public function district(){
        return $this->belongsTo('App\Models\District','district_id','id');
    }
    
    public function zone(){
        return $this->belongsTo('App\Models\Zone','zone_id','id');
    }
    public function breed(){
        return $this->belongsTo('App\Models\Breed','bull_breed','id');
    }
    public function color(){
        return $this->belongsTo('App\Models\Color','calf_color','id');
    }
    public function blood_rate(){
        return $this->belongsTo('App\Models\BloodRate','blood_qty','id');
    }
}
