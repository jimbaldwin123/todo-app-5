@extends('app')

@section('content')
    <h2>{{ $task->name }}</h2>

    <div>

        <div>{{ $task->name }}</div>
        <div>{{ $task->description }}</div>

    </div>

    <p>
        edit task
    </p>
@endsection


