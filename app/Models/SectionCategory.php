<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionCategory extends Model
{
    use HasFactory;

    public function get_sections(){
        return $this->hasMany(Section::class, 'category_id', 'id');
    }
}
