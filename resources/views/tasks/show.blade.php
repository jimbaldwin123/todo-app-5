
@extends('app')

@section('content')
    <h2>
        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
    </h2>

    <p>{{ $task->description }}</p>

    <p>Completed: {{ $task->completed ? 'Yes' : 'No'}}</p>

@endsection