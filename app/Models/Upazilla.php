<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    use HasFactory;
    public function district(){
        return $this->belongsTo('App\Models\District','district_id','id');
    }
}
