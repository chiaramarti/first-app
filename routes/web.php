<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = Product::all();
    return response()->json($products);
});

Route::post('/products', function (Request $request) {
    $product = Product::create($request->all());
    return response()->json($product, 201);
});

Route::get('/products/{id}', function ($id) {
    $product = Product::find($id);
    if ($product) {
        return response()->json($product);
    } else {
        return response()->json(['message' => 'Product not found'], 404);
    }
});

Route::put('/products/{id}', function (Request $request, $id) {
    $product = Product::find($id);
    if ($product) {
        $product->update($request->all());
        return response()->json($product);
    } else {
        return response()->json(['message' => 'Product not found'], 404);
    }
});

Route::delete('/products/{id}', function ($id) {
    $product = Product::find($id);
    if ($product) {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    } else {
        return response()->json(['message' => 'Product not found'], 404);
    }
});
