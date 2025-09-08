@extends('layouts.app')

@section('title','Admin Dashboard')

@section('content')
<div class="container py-4">
    <h1>Admin Dashboard</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Products</h5>
                <p class="h2">{{ $productCount }}</p>
                <a href="{{ route('admin.products') }}" class="btn btn-sm btn-primary">Manage Products</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Categories</h5>
                <p class="h2">{{ $categoryCount }}</p>
                <a href="{{ route('admin.categories') }}" class="btn btn-sm btn-primary">Manage Categories</a>
            </div>
        </div>
    </div>
</div>
@endsection
