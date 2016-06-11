@extends('app')

@section('content')
    <h2>{{ $title }}</h2>
    <h4>Tasks</h4>
    @include('projects/partials/_local_nav')

    <div></div>

    <table class="table table-bordered" id="projects-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
        </tr>
        </thead>
    </table>

    <p>
        create project
    </p>
@endsection

@push('scripts')
<script>
    $(function() {

        $('#projects-table').DataTable({
            processing: true,
            serverSide: true,
            language: {
                emptyTable: 'There are no tasks assigned to this project.'
            },
            ajax: '/datatables/data2/{{ $project_id }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'slug', name: 'slug' }

            ]
        });
    });
</script>
@endpush



