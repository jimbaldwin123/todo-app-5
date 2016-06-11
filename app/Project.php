<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'slug'];
    
    function tasks()
    {
    	return $this->hasMany('App\Task');
    }
}
