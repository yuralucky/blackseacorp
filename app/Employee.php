<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function scopeSearch($query,$s)
    {
        return $query->where('name','like','%'.$s.'%')->
            orWhere('salary','like','%'.$s.'%');
    }
}
