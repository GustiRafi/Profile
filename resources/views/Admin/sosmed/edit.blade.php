@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Media Sosial</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">edit media sosial</li>
    </ol>
    <a href="/dashboard/sosmed" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/sosmed/{{ $sosmed->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name"
                placeholder="Name" value="{{ old('name', $sosmed->name) }}" required>
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('icon')is-invalid @enderror" name="icon" id="icon"
                placeholder="Icon" value="{{ old('icon', $sosmed->icon) }}" required>
            <label for="icon">Icon</label>
            @error('icon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('url')is-invalid @enderror" name="url" id="url"
                placeholder="Url" value="{{ old('url', $sosmed->url) }}" required>
            <label for="url">Url</label>
            @error('url')
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