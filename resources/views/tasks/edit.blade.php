
<!-- /resources/views/tasks/edit.blade.php -->
@extends('app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Edit Task: {{ $task->name }} </h1>

            {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
            @include('tasks/partials/_form', ['submit_text' => 'Save Task'])
            {!! Form::close() !!}
        </div>
    </div>
@endsection