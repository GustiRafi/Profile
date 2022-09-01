@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Certificate</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">edit certificate</li>
    </ol>
    <a href="/dashboard/certificate" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/certificate/{{ $certificate->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name"
                placeholder="Name" value="{{ old('name', $certificate->name) }}" required>
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="hidden" name="oldimage" value="{{ $certificate->image }}">
            @if($certificate->image)
            <img src="{{ asset('storage/' . $certificate->image) }}" class="d-block img-fluid mb-3 col-sm-5"
                id="output">
            @else
            <img class="d-block img-fluid mb-3 col-sm-5" id="output">
            @endif
            <input type="file" class="form-control @error('image')is-invalid @enderror" name="image" id="image"
                placeholder="Image" value="{{ old('image', $certificate->image) }}" onchange="loadFile(event)">
            <label for="image">Image</label>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
</div>
@endsection