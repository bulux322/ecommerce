<?php

namespace App\Http\Controllers\admin;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogPosts = BlogPost::all();
        return view('admin.blogpostadmin', compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.addblogpost', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('image'));
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|unique:blog_posts',
            'blogcategory_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('blog/', $imageName);

            $validatedData['image'] = $imageName;
        }

        BlogPost::create($validatedData);

        return redirect(route('admin.blogposts.index'))->with('success', 'Blog post has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogPost = BlogPost::find($id);
        return view('admin.blogposts.show', compact('blogPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogPost = BlogPost::find($id);
        return view('admin.editblogpost', compact('blogPost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'slug' => 'required|unique:blog_posts,slug,' . $id,
            'blogcategory_id' => 'required',
        ]);

        $blogPost = BlogPost::find($id);
        $blogPost->update($validatedData);

        return redirect(route('admin.blogposts.index'))->with('success', 'Blog post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogPost = BlogPost::find($id);
        $blogPost->delete();

        return redirect(route('admin.blogposts.index'))->with('success', 'Blog post has been deleted.');
    }
}
