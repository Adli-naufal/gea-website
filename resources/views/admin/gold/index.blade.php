@extends('admin.layout')

@section('title', 'Gold & Dinar')
@section('page-title', 'Gold & Dinar Prices')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Weight</th>
                    <th>Price (Rp)</th>
                    <th>Status</th>
                    <th width="120">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="text-capitalize">{{ $product->type }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ number_format($product->price) }}</td>
                    <td>
                        @if($product->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="/admin/gold/{{ $product->id }}/edit"
                            class="btn btn-sm btn-primary">
                            Edit
                        </a>

                    </td>
                </tr>
                @endforeach

                @if($products->isEmpty())
                <tr>
                    <td colspan="6" class="text-center text-muted">
                        No products yet
                    </td>
                </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>
@endsection