<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    public function week(){
        return $this->hasOne(Week::class);
    }

    public function day(){
        return $this->hasOne(Day::class);
    }

    public function time(){
        return $this->hasOne(Time::class);
    }
}
