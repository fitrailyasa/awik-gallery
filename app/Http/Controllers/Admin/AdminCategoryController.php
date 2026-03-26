<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'nullable|max:500',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('categories', 'public');
        }

        Category::create($data);

        return back()->with('alert', 'Success create category!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'nullable|max:500',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('img')) {

            if ($category->img && Storage::disk('public')->exists($category->img)) {
                Storage::disk('public')->delete($category->img);
            }

            $data['img'] = $request->file('img')->store('categories', 'public');
        }

        $category->update($data);

        return back()->with('alert', 'Success Edit category!');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        if ($category->img && Storage::disk('public')->exists($category->img)) {
            Storage::disk('public')->delete($category->img);
        }

        $category->delete();

        return back()->with('alert', 'Success Delete category!');
    }
}
