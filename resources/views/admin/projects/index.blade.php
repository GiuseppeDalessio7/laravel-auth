@extends('layouts.admin')

@section('content')
    @if (session('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Message: </strong> {{ session('message') }}
        </div>
    @endif


    <h1>All Project is here</h1>

    <div class="controls">
        <a class="btn btn-info text-white" href="{{ route('admin.projects.create') }}">AddNew</a>
    </div>

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
                        <td> <img width="100" src="{{ $project->cover_image }}" alt=""></td>
                        <td><a href="{{ route('admin.projects.show', $project->slug) }}" class=" btn btn-primary">View</a>
                            <a href="{{ route('admin.projects.edit', $project->slug) }}" class=" btn btn-primary">Edit</a>
                            <a href="{{ route('admin.projects.destroy', $project->slug) }}"
                                class=" btn btn-danger">Delete</a>
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
