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



