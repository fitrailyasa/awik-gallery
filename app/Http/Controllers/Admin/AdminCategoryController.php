<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'desc' => 'required|max:500',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $category = Category::create($request->all());

        if ($request->hasFile('img')) {
            $category->img = $request->file('img')->store('public');
        }
        return back()->with('alert', 'Success create category!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'required|max:500',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::where('id', $id)->first();
        $categoryData = $request->all();

        if ($request->hasFile('img')) {
            $categoryData['img'] = $request->file('img')->store('public');
        }

        $category->update($categoryData);
        return back()->with('alert', 'Success Edit category!');
    }

    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();
        return back()->with('alert', 'Success Delete category!');
    }
}
