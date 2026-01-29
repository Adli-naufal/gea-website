@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row g-4">

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Gold Products</h6>
                <h3>—</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Dinar Products</h6>
                <h3>—</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Last Update</h6>
                <h3>—</h3>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <h2 class="h4 mb-3">Blog Management</h2>
        <a href="{{ route('admin.blog.index') }}"
            class="inline-block px-4 py-2 bg-black text-white rounded">
                Manage Blog Posts
        </a>
    </div>

</div>
@endsection