<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{


    public function getIndex($id)
    {
        dd('here');
        return view('show', ['id' => $id]);
    }

    public function anyData($id)
    {
        $tasks = Project::find($id)->tasks;
        // return $tasks;
        return Datatables::of($tasks)->make(true);
    }

}
