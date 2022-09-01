@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Media Sosial</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">media sosial</li>
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
            <th>Name</th>
            <th>icon</th>
            <th>link</th>
            <th>action</th>
        </tr>
        @foreach($sosmeds as $sosmed )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sosmed->name }}</td>
            <td>{!! $sosmed->icon !!}</td>
            <td>
                <a href="{{ $sosmed->url }}" target="_blank"
                    class="badge bg-primary text-decoration-none text-white">Cek link</a>
            </td>
            <td>
                <a href="/dashboard/sosmed/{{ $sosmed->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
@endsection