<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department_model extends Model
{
    protected $table='department';
    protected $fillable=['department_name','description','status'];
}
