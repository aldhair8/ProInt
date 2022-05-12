<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function sons(){
        return $this->hasMany(sons::class);

    }

    public function apouses(){
        return $this->hasMany(spouses::class);

    }
    public function assistances(){
        return $this->hasMany(assistances::class);

    }
}
