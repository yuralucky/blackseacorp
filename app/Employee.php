<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Employee extends Model
{
    use Sortable;

    protected $fillable = ['name', 'position', 'parent_id', 'date_of_employment', 'salary'];

    public $sortable = ['id', 'name', 'salary'];

//    employee has many children

    public function childs()
    {
        $this->hasMany('App\Employee', 'parent_id', 'id');
    }
}
