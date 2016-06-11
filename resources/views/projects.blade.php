@extends('app')

@section('content')
    <h2>Projects</h2>
        

<div></div>

    <table class="table table-bordered" id="projects-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
 
    <p>
        <a href="/project/create">Create Project</a>
    </p>
@endsection

@push('scripts')
<script>
$(function() {

    $('#projects-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'slug', name: 'slug' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush