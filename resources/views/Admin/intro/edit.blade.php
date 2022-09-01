@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit introduction</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">edit introduction</li>
    </ol>
    <a href="/dashboard/intro" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/intro/{{ $intro->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <input type="text" name="oldimage" id="oldimage" value="{{ $intro->image }}" hidden>
            @if($intro->image)
            <img src="{{ asset('storage/' . $intro->image) }}" class="d-block img-fluid mb-3 col-sm-5" id="output">
            @else
            <img class="d-block img-fluid mb-3 col-sm-5" id="output">
            @endif
            <input type="file" class="form-control @error('image')is-invalid @enderror" name="image" id="image"
                placeholder="Image" value="{{ old('image', $intro->image) }}" onchange="loadFile(event)">
            <label for="image">Image</label>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label for="body mb-3">body</label>
        <div class="form-floating mt-3">
            @error('body')
            <div class="alert alert-danger my-3" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $intro->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
</div>
</div>
@endsection