<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collar extends Model
{
    /** @use HasFactory<\Database\Factories\CollarFactory> */
    use HasFactory;

    public function setTitleAttribute($value){
        $this->attributes['title']=ucfirst(trim($value));
    }
}
