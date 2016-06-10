@extends('app')

@section('content')
    <h1>Project: {{ $project->name }}</h1>
    @include('projects/partials/_local_nav')
    @if ( !$project->tasks->count() )
        Your project has no tasks.
    @else



            <div class="container-fluid">

<h2>H2</h2>

                
                @foreach($project->tasks(Input::get("col"],Input::get("ord"))->get() as $task)

                    @if(empty($input['search']) || strpos(strtoupper($task->description),strtoupper($input['search'])) !== false)
                    <div class="row" >
                        <div class="col-xs-1">{{ $task->id }} </div>
                        <div class="col-xs-3"><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></div>
                        <div class="col-xs-3">{{ $task->description }}</div>
                        <div class="col-xs-2">{{ date('Y-m-d', strtotime($task->updated_at)) }}</div>
                        <div class="col-xs-1">{{ $task->completed ? 'Yes' : 'No'}}</div>
                        <div class="col-xs-2">
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                            {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-info confirm')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    
                @endforeach
            </div>
    @endif
 
@include('projects/partials/_local_nav')
@endsection




