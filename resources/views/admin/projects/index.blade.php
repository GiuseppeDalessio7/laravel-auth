@extends('layouts.admin')

@section('content')
    <h1>All Project is here</h1>
    <div class="table-responsive">
        <table
            class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Cover_Image</th>

                    <th class="">action</th>


                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse ($projects as $project)
                    <tr class="table-primary">
                        <td scope="row">{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->cover_image }}</td>
                        <td><a href="" class=" btn btn-primary">View</a>
                            <a href="" class=" btn btn-primary">Update</a>
                            <a href="" class=" btn btn-danger">Delete</a>
                        </td>


                    </tr>
                @empty

                    <tr class="table-primary">
                        <td scope="row">Item</td>

                    </tr>
                @endforelse


            </tbody>
            <tfoot>

            </tfoot>

        </table>
        <div class=" mx-auto pb-8">
            {{ $projects->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
