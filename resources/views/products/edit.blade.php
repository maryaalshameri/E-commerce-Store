@extends('layouts.app')
@section('content')
<div class="container">
    <h3>{{ isset($product) ? 'تعديل منتج' : 'إضافة منتج' }}</h3>

    @if($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form method="POST" enctype="multipart/form-data"
          action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}">
        @csrf
        @if(isset($product)) @method('PUT') @endif

        <div class="mb-3">
            <label>القسم</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- اختر قسم --</option>
                @foreach($categories as $c)
                    <option value="{{ $c->id }}" @selected(old('category_id',$product->category_id ?? '')==$c->id)>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3"><label>الاسم</label>
            <input type="text" name="name" class="form-control" value="{{ old('name',$product->name ?? '') }}" required>
        </div>

        <div class="mb-3"><label>الوصف</label>
            <textarea name="description" class="form-control" required>{{ old('description',$product->description ?? '') }}</textarea>
        </div>

        <div class="mb-3"><label>السعر</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price',$product->price ?? '') }}" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="on_sale" value="1" id="on_sale"
                   @checked(old('on_sale',$product->on_sale ?? false))>
            <label class="form-check-label" for="on_sale">على التخفيض</label>
        </div>

        <div class="mb-3"><label>الصورة</label>
            <input type="file" name="image" class="form-control" @if(!isset($product)) required @endif>
            @isset($product)
                <small>اتركها فارغة للإبقاء على الصورة الحالية</small><br>
                <img src="{{ asset($product->image) }}" width="90" class="mt-2">
            @endisset
        </div>

        <button class="btn btn-success">{{ isset($product) ? 'تحديث' : 'حفظ' }}</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>
</div>
@endsection
