<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog_single = Blog::where('slug',$slug)->firstOrFail();
        return view('blog-single', compact('blog_single'));
    }
}
