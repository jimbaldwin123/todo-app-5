@extends('app')

@section('content')
    <h2>Projects</h2>
        
    @if(!$projects->count())
        You have no projects
    @else
<div></div>

<!--         <div class="row">
            <div class="col-xs-1">ID</div>
            <div class="col-xs-3"><a href="/?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=name">Name</a></div>
            <div class="col-xs-2"><a href="/?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=slug">Slug</a></div>
            <div class="col-xs-2"><a href="/?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=updated_at">Updated</a></div>
            <div class="col-xs-2"><span class="pull-right">Tasks</span></div>
            <div class="col-xs-2">&nbsp;</div>
        </div> -->
                            
        @foreach($projects as $project)
            <div class="row" >
        
                <div class="col-xs-1">{{ $project->id }} </div>
                <div class="col-xs-3"><a href="">{{ $project->name }}</a></div>
                <div class="col-xs-2">{{ $project->slug}}</div>
                <div class="col-xs-2">{{ date('Y-m-d', strtotime($project->updated_at)) }}</div>
                <div class="col-xs-2"><span class="pull-right"></span></div>
        

                    
            </div>
        @endforeach

    @endif
    <p>
        create project
    </p>
@endsection