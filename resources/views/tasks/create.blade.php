<!-- /resources/views/tasks/create.blade.php -->
@extends('app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Create Task for Project: {{ $project->name }}</h1>
            {!! Form::model(new App\Task, ['route' => ['tasks.store', $project->slug], 'class'=>'']) !!}
            @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
            {!! Form::close() !!}
        </div>
    </div>
@endsection
