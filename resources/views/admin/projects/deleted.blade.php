@extends('layout.admin')


@section('content')
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>Nice! </strong> {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="container mt-5">
            <div class="row align-items-md-stretch">
                <div class="col-md-12 h-100 p-5 text-white bg-primary border rounded-3">
                    <div class="row">
                        <div class="col-6">
                            <h2>{{ $project->title }}</h2>
                            <p>{{ $project->description }}</p>
                            <img src="{{ $project->cover_image }}" alt="">
                        </div>
                    </div>

                </div>

            </div>

            <button class="btn btn-danger m-2" type="submit">DELETE</button>
    </form>
@endsection
