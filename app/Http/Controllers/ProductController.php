<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'cost' => $request->cost,
            'tiktok_price' => $request->tiktok_price,
            'shopee_price' => $request->shopee_price,
        ]);

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'cost' => $request->cost,
            'tiktok_price' => $request->tiktok_price,
            'shopee_price' => $request->shopee_price,
        ]);

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return response()->json([
            'message' => 'Product Delete Successful'
        ]);
    }
}
