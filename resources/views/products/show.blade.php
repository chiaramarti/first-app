@extends('template.template')

@section('title', 'Product Details')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ number_format($product->price, 2) }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
@endsection
