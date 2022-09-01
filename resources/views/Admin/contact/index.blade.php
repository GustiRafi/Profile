@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Contact</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">contact</li>
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
            <th>title</th>
            <th>icon</th>
            <th>body</th>
            <th>action</th>
        </tr>
        @foreach($contacts as $contact )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contact->title }}</td>
            <td>{!! $contact->icon !!}</td>
            <td>{{ $contact->body }}</td>
            <td>
                <a href="/dashboard/contact/{{ $contact->id }}/edit"
                    class="badge bg-success text-decoration-none text-white"><i class="bi bi-pen">edit</i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
@endsection