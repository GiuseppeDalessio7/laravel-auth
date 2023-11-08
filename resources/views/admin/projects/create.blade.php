@extends('layouts.admin')

@section('content')

    @if ($errors->any())
        <div class="alert alert-primary" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Create Post</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ ruote('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="title" class="form-control" id="title">
                    <small class="text-muted">Type your Project Title</small>

                    <label for="cover_image" class="form-label">First name</label>
                    <input type="cover_image" class="form-control" id="cover_image">
                    <small class="text-muted">Add an image max 1000kb</small>
                    <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
