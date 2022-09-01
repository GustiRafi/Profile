@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Project</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">add project</li>
    </ol>
    <a href="/dashboard/project" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/project" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name"
                placeholder="Name" value="{{ old('name') }}" required>
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <img class="d-block img-preview img-fluid mb-3 col-sm-5" id="output">
            <input type="file" class="form-control @error('thumb')is-invalid @enderror" name="thumb" id="thumb"
                placeholder="Thumbnail" value="{{ old('thumb') }}" onchange="loadFile(event)" required>
            <label for="thumb">Thumbnail</label>
            @error('thumb')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('url')is-invalid @enderror" name="url" id="url"
                placeholder="Url" value="{{ old('url') }}" required>
            <label for="url">Url</label>
            @error('url')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>
</div>
</div>
@endsection