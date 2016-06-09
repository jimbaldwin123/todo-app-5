<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    function taskts()
    {
    	return $this->hasMany('App\Task');
    }
}
