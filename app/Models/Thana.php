<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    use HasFactory;
    public function upazilla(){
        return $this->belongsTo('App\Models\Upazilla','upazilla_id','id');
    }
}
