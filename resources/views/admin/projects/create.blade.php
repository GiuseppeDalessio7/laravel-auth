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
            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="title" class="form-control" name="title" id="title"
                        placeholder="Type your Project Title" @error('title') is-invalid @enderror placeholder="title"
                        aria-describedby="helperTitle" value="{{ old('title') }}">


                    <div class="mt-5"> <label for="cover_image">Image</label>
                        <input type="file" name="cover_image" class="form-control-file" id="cover_image"
                            @error('img_full') is-invalid @enderror placeholder="title" aria-describedby="helperTitle"
                            value="{{ old('img_full') }}">
                        <small class="text-muted">Add an image max 1000kb</small>
                    </div>

                    <div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea class="form-control" @error('description') is-invalid @enderror name="description" id="description"
                                rows="3"></textarea>
                        </div>
                        @error('content')
                            <span class="text-danger">
                                {{ message }}
                            </span>
                        @enderror
                    </div>


                    <div class=" mt-5"><button type="submit" class="btn btn-primary">Save</button></div>


            </form>
        </div>
    </div>
@endsection
