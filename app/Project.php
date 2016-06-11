<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    function tasks()
    {
    	return $this->hasMany('App\Task');
    }
}
