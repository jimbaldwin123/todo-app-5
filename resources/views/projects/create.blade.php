<!-- /resources/views/projects/edit.blade.php -->
@extends('app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">

            <h1>Create Project</h1>

            <form method="POST" actioprojects.store" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                @include('projects/partials/_form', ['submit_text' => 'Create Project'])

            </form>
        </div>
    </div>
@endsection
