@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit About</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">edit about</li>
    </ol>
    <a href="/dashboard/about" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/about/{{ $about->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" id="title"
                placeholder="Title" value="{{ old('title', $about->title) }}" required>
            <label for="title">Title</label>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="oldimage" id="oldimage" value="{{ $about->image }}" hidden>
            @if($about->image)
            <img src="{{ asset('storage/' . $about->image) }}" class="d-block img-fluid mb-3 col-sm-5" id="output">
            @else
            <img class="d-block img-fluid mb-3 col-sm-5" id="output">
            @endif
            <input type="file" class="form-control @error('image')is-invalid @enderror" name="image" id="image"
                placeholder="Image" value="{{ old('image', $about->image) }}" onchange="loadFile(event)">
            <label for="image">Image</label>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label for="description mb-3">description</label>
        <div class="form-floating mt-3">
            @error('description')
            <div class="alert alert-danger my-3" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input id="description" type="hidden" name="description"
                value="{{ old('description', $about->description) }}">
            <trix-editor input="description"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
</div>
</div>
@endsection