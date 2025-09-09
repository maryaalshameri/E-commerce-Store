@extends('layouts.app')

@section('title','Admin - Products')

@section('content')
<div class="container py-4">
    <h2>Products</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th><th>Name</th><th>Category</th><th>Price</th><th>On Sale</th><th>الاجراءات</th>
            </tr>
        </thead>
        <tbody>
        @forelse($products as $p)
            <tr>
                <td><img src="{{ asset($p->image) }}" alt="" width="60"></td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->category->name ?? '-' }}</td>
                <td>${{ number_format($p->price,2) }}</td>
                <td>{{ $p->on_sale ? 'Yes' : 'No' }}</td>
                <td>
                    @can('update', $p)
                    <a href="{{ route('products.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        @endcan

                        @can('delete', $p)
                            <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        @endcan
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No products found.</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
