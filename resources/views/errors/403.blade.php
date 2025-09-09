@extends('layouts.app')

@section('title', 'Forbidden')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-1 text-danger">403</h1>
    <h3 class="mb-4">Access Forbidden</h3>
    <p>You do not have permission to access this page.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
</div>
@endsection