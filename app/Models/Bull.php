<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bull extends Model
{
    use HasFactory;
    public function breed(){
        return $this->belongsTo('App\Models\Breed');
    }
    public function bloodrate(){
        return $this->belongsTo('App\Models\BloodRate');
    }
}
