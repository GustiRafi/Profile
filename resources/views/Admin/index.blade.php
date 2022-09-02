@extends('Admin.layouts.main')
@section('main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <h2>Welcome back {{ auth()->user()->name }}</h2>
</div>
</div>
</div>
@endsection