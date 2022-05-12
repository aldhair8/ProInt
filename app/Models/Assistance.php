<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;
    public function associate(){
        return $this->belongsTo(associates::class);
    }

    public function activity(){
        return $this->belongsTo(activities::class);
    }

    public function payment(){
        return $this->hasOne(payments::class);
    }

    public function fine(){
        return $this->hasOne(fines::class);
    }
}
