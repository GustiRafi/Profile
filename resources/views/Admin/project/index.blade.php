@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Project</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">project</li>
    </ol>
    <a href="/dashboard/project/create" class="btn btn-primary mb-3">Add new</a>
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
            <th>image</th>
            <th>link</th>
            <th>action</th>
        </tr>
        @foreach($projects as $project )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->name }}</td>
            <td><img src="{{ asset('storage/'.$project->thumb) }}" style="max-width:200px;" alt="" srcset=""></td>
            <td>
                <a href="{{ $project->url }}" target="_blank"
                    class="badge bg-primary text-decoration-none text-white">Cek link</a>
            </td>
            <td>
                <a href="/dashboard/project/{{ $project->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
                <form action="/dashboard/project/destroy" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <input type="text" name="oldimage" id="oldimage" value="{{ $project->thumb }}" hidden>
                    <input type="text" name="id" id="id" value="{{ $project->id }}" hidden>
                    <button type="submit" class="badge bg-danger border-0"
                        onclick="return confirm('Are you sure delete this data?')"><i
                            class="bi bi-trash">delete</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
@endsection