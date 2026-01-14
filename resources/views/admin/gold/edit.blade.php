@extends('admin.layout')

@section('title', 'Edit Price')
@section('page-title', 'Edit Product Price')

@section('content')
<div class="card shadow-sm" style="max-width: 500px;">
    <div class="card-body">

        <form method="POST" action="/admin/gold/{{ $product->id }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text"
                       class="form-control"
                       value="{{ $product->name }}"
                       disabled>
            </div>

            <div class="mb-3">
                <label class="form-label">Price (Rp)</label>
                <input type="number"
                       name="price"
                       class="form-control"
                       value="{{ $product->price }}"
                       required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input"
                       type="checkbox"
                       name="is_active"
                       id="activeCheck"
                       {{ $product->is_active ? 'checked' : '' }}>
                <label class="form-check-label" for="activeCheck">
                    Active
                </label>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-dark">Save</button>
                <a href="/admin/gold" class="btn btn-secondary">Cancel</a>
            </div>

        </form>

    </div>
</div>
@endsection