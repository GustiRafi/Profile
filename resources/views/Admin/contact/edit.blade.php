@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Contact</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">edit contact</li>
    </ol>
    <a href="/dashboard/contact" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/contact/{{ $contact->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" id="title"
                placeholder="Title" value="{{ old('title', $contact->title) }}" required>
            <label for="title">Title</label>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('icon')is-invalid @enderror" name="icon" id="icon"
                placeholder="Icon" value="{{ old('icon', $contact->icon) }}" required>
            <label for="icon">Icon</label>
            @error('icon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('body')is-invalid @enderror" name="body" id="body"
                placeholder="Body" value="{{ old('B', $contact->body) }}" required>
            <label for="body">Body</label>
            @error('body')
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