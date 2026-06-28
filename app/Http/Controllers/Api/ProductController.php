<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{

public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required',
        'title' => 'required',
        'price' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);

    $imageName = time() . "." . $request->image->extension();

    $request->image->move(public_path('images/products'), $imageName);

    $product = Product::create([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'price' => $request->price,
        'description' => $request->description,
        'image' => $imageName
    ]);

    return response()->json($product, 201);
}


public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'price' => $request->price,
        'description' => $request->description,
        'image' => $request->image,
    ]);

    return response()->json($product);
}

    public function index()
{
    $products = Product::with('category')->get();

    foreach ($products as $product) {

        $folder = match ($product->category->name) {
            'Laptop Stands'   => 'Laptop Stands',
            'Ergonomic Seats' => 'Ergonomic Seats',
            'Desk Lamps'      => 'Monitor Lights',
            'Desk Mats'       => 'Desk Mats',
        };

        $product->image = url("images/{$folder}/{$product->image}");
    }

    return response()->json($products);
}


    public function destroy($id)
    {

        Product::destroy($id);

        return response()->json([
            'message' => 'Deleted'
        ]);

    }

}