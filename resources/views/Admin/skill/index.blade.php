@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Skill</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">skill</li>
    </ol>
    <a href="/dashboard/skill/create" class="btn btn-primary mb-3">Add new</a>
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
            <th>action</th>
        </tr>
        @foreach($skills as $skill )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $skill->name }}</td>
            <td>{!! $skill->icon !!}</td>
            <td>
                <a href="/dashboard/skill/{{ $skill->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
                <form action="/dashboard/skill/{{ $skill->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
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