@extends('layouts.app')
@section('content')
<div class="container">
    <h3>{{ $product->name }}</h3>
    <img src="{{ asset($product->image) }}" width="180" class="mb-3">
    <p>القسم: {{ $product->category->name ?? '-' }}</p>
    <p>السعر: ${{ number_format($product->price,2) }}</p>
    <p>التخفيض: {{ $product->on_sale ? 'نعم' : 'لا' }}</p>
    <p>{{ $product->description }}</p>
    <a class="btn btn-secondary" href="{{ route('products.index') }}">رجوع</a>
</div>
@endsection