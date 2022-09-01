@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">About Me</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">about me</li>
    </ol>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table table-responsive">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>image</th>
            <th>Description</th>
            <th>action</th>
        </tr>
        @foreach($abouts as $about )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $about->title }}</td>
            <td><img src="{{ asset('storage/'. $about->image) }}" class="w-25" alt="" srcset=""></td>
            <td>{!! $about->description !!}</td>
            <td>
                <a href="/dashboard/about/{{ $about->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
@endsection