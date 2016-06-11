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
        return Datatables::of($projects)
            ->editColumn('name','<a href="project/{{$id}}" >{{$name}}</a>')
            ->make(true);
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $title = Project::find($id)->name;
        return view('show', ['project_id' => $id, 'title' => $title]);
    }

    public function AnyProject($id)
    {
        $tasks = Project::find($id)->tasks;
        return Datatables::of($tasks)
            ->editColumn('name','<a href="{{ route(\'tasks.show\', [ $id ]) }}">{{$name}}</a>')
            ->make(true);
    }





//    public function show($id)
//    {
//
//        $tasks = Project::find($id)->tasks;
//        return view('show',['project' => Project::find($id)]);
//    }
}
