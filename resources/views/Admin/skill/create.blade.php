@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Skill</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">add skill</li>
    </ol>
    <a href="/dashboard/skill" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/skill" method="post" enctype="multipart/form-data">
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
            <label for="icon">Icon</label>
            <input type="text" class="form-control @error('icon')is-invalid @enderror" name="icon" id="icon"
                placeholder="example:<i class='fa-brands fa-html5'></i>" value="{{ old('icon') }}" required>
            @error('icon')
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