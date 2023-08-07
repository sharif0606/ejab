<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    use HasFactory;
    public function upazilla(){
        return $this->belongsTo('App\Models\Upazilla');
    }
}
