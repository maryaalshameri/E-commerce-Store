@extends('layouts.app')
@section('title','Add Product')
@section('content')
<h2>Add Product</h2>


@if ($errors->any())
<div class="alert alert-danger">
<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif


<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
@csrf
<label>Name</label>
<input type="text" name="name" value="{{ old('name') }}" required>


<label>Description</label>
<textarea name="description" required>{{ old('description') }}</textarea>


<label>Price</label>
<input type="number" step="0.01" name="price" value="{{ old('price') }}" required>


<label>On Sale</label>
<input type="checkbox" name="on_sale" value="1" {{ old('on_sale') ? 'checked' : '' }}>


<label>Image</label>
<input type="file" name="image" accept="image/*">


<button type="submit">Save</button>
</form>
@endsection