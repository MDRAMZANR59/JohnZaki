<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placket extends Model
{
    public function setTitleAttribute($value){
        $this->attributes['title']=ucfirst(trim($value));
    }
}
