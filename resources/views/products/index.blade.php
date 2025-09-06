@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>المنتجات</h3>
        <a href="{{ route('products.create') }}" class="btn btn-primary">إضافة منتج</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>الصورة</th><th>الاسم</th><th>القسم</th><th>السعر</th><th>على التخفيض</th><th>عمليات</th>
            </tr>
        </thead>
        <tbody>
        @forelse($products as $p)
            <tr>
                <td><img src="{{ asset($p->image) }}" width="60"></td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->category->name ?? '-' }}</td>
                <td>${{ number_format($p->price,2) }}</td>
                <td>{{ $p->on_sale ? 'نعم' : 'لا' }}</td>
                <td class="d-flex gap-2">
                    <a class="btn btn-sm btn-info" href="{{ route('products.show',$p) }}">عرض</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('products.edit',$p) }}">تعديل</a>
                    <form method="POST" action="{{ route('products.destroy',$p) }}" onsubmit="return confirm('حذف المنتج؟')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">حذف</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">لا توجد منتجات</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
