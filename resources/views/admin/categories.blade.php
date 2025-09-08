@extends('layouts.app')

@section('title','Admin - Categories')

@section('content')
<div class="container py-4">
    <h2>Categories</h2>
    <table class="table">
        <thead><tr><th>Name</th><th>Slug</th><th>Products</th></tr></thead>
        <tbody>
        @forelse($categories as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>{{ $c->slug }}</td>
                <td>{{ $c->products_count }}</td>
            </tr>
        @empty
            <tr><td colspan="3">No categories found.</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $categories->links() }}
</div>
@endsection
