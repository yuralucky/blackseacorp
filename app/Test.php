<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable=['name','parent_id'];

    public function childs()
    {
        return $this->hasMany('App\Test','parent_id','id');
    }

}
