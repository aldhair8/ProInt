<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function fine(){
        return $this->belongsTo(fines::class);
    }
    public function assitance(){
        return $this->hasOne(assistances::class);
    }
    public function activity(){
        return $this->hasOne(activities::class);
    }
}
