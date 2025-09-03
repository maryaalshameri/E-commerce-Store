@extends('layouts.app')
@section('title','Edit Product')
@section('content')
<h2>Edit Product</h2>


@if ($errors->any())
<div class="alert alert-danger">
<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif


<form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')


<label>Name</label>
<input type="text" name="name" value="{{ old('name', $product->name) }}" required>


<label>Description</label>
<textarea name="description" required>{{ old('description', $product->description) }}</textarea>


<label>Price</label>
<input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>


<label>On Sale</label>
<input type="checkbox" name="on_sale" value="1" {{ old('on_sale', $product->on_sale) ? 'checked' : '' }}>


<label>Image</label>
<input type="file" name="image" accept="image/*">


<button type="submit">Update</button>
</form>
@endsection