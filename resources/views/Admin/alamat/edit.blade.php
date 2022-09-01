@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Address</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">edit address</li>
    </ol>
    <a href="/dashboard/alamat" class="badge bg-primary mb-4"><i class="bi bi-arrow-left">Back</i></a>
    <form action="/dashboard/alamat/{{ $alamat->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('addres')is-invalid @enderror" name="addres" id="addres"
                placeholder="Address" value="{{ old('addres', $alamat->addres) }}" required>
            <label for="addres">Address</label>
            @error('addres')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('maps')is-invalid @enderror" name="maps" id="maps"
                placeholder="Maps" value="{{ old('maps', $alamat->maps) }}" required>
            <label for="maps">Maps</label>
            @error('maps')
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