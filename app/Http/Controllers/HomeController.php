<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }


    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('client.category', compact('category'));
    }

    public function contact()
    {
        return view('client.contact');
    }
}
