<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Yajra\Datatables\Datatables;
use Log;

class ProjectsController extends Controller
{

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        \Log::debug('YYYYYYYYYYYYYYYYYY ');
        return view('projects');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $projects = Project::all();
        \Log::debug('XXXXXXXXXXXXXXXXX ', ['projects' => $projects]);
        return Datatables::of($projects)
            ->editColumn('name','<a href="project/{{$id}}" >{{$name}}</a>')
            ->make(true);
    }

    public function show($id)
    {
        return view('show',['project' => Project::find($id)]);
    }
}
