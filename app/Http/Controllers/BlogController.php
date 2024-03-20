<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->sortByDesc('created_at')->paginate(8);

        return view('blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = auth()->id();
        $blog->save();

        return redirect()->route('blog.index');
    }
}
