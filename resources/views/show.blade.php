@extends('app')

@section('content')
    <h1>Project: {{ $project->name }}</h1>
   




            <div class="container-fluid">

<h2>H2</h2>

                
                @foreach($project->tasks as $task)


                    <div class="row" >
                        <div class="col-xs-1">{{ $task->id }} </div>
                        <div class="col-xs-3">{{ $task->name }}</a></div>
                        <div class="col-xs-3">{{ $task->description }}</div>
                        <div class="col-xs-2">{{ date('Y-m-d', strtotime($task->updated_at)) }}</div>
                        <div class="col-xs-1">{{ $task->completed ? 'Yes' : 'No'}}</div>

                    </div>

                    
                @endforeach
            </div>
  

@endsection




