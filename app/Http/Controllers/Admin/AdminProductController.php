<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.index', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'nullable|max:500',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('products', 'public');
        }

        Product::create($data);

        return back()->with('alert', 'Success create product!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'nullable|max:500',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('img')) {

            if ($product->img && Storage::disk('public')->exists($product->img)) {
                Storage::disk('public')->delete($product->img);
            }

            $data['img'] = $request->file('img')->store('products', 'public');
        }

        $product->update($data);

        return back()->with('alert', 'Success Edit product!');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->img && Storage::disk('public')->exists($product->img)) {
            Storage::disk('public')->delete($product->img);
        }

        $product->delete();

        return back()->with('alert', 'Success Delete product!');
    }
}
