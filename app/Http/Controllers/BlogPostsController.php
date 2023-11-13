<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all(); // Ambil semua postingan dari database
        return view('blogposts', compact('posts'));
    }

    public function postDetails($slug)
    {
        $post = BlogPost::where('slug', $slug)->first();
        return view('blogpostdetails', compact('post'));
    }
}
