<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Yajra\Datatables\Datatables;
use Log;
use Input;
use Redirect;

class ProjectsController extends Controller
{

    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];

    public function __construct(){
        // $this->middleware('auth', ['only' => ['edit','create','store','update','destroy']]);
    }

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



// ******************** REST methods ********************* /

    public function create()
    {
        return view('projects.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, $this->rules);
        $input = Input::only('name','slug');

        Project::create( $input );
        return redirect('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Project $project, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $project->update($input);

        return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
    }

    public function delete($project){
        return view('projects.delete', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Project $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return Redirect::route('projects.index')->with('message', 'Project deleted.');
    }

}
