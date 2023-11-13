<?php

namespace App\Http\Controllers\admin;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class AdminBlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap(); // Menggunakan Paginator dengan tampilan Bootstrap

        $categories = BlogCategory::paginate(5);
        return view('admin.blogcategories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addblogcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|unique:blog_categories',
            'slug' => 'required|unique:blog_categories',
        ]);

        // Simpan kategori baru ke database
        $category = new BlogCategory;
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->save();

        return redirect(route('admin.blogcategories.index'))->with('success', 'Kategori telah berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tampilkan halaman detail kategori berdasarkan ID
        $category = BlogCategory::find($id);
        return view('admin.blogcategories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form edit untuk kategori berdasarkan ID
        $category = BlogCategory::find($id);
        return view('admin.editblogcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|unique:blog_categories,name,' . $id,
            'slug' => 'required|unique:blog_categories,slug,' . $id,
        ]);

        // Perbarui kategori berdasarkan ID
        $category = BlogCategory::find($id);
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->save();

        return redirect(route('admin.blogcategories.index'))->with('success', 'Kategori telah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus kategori berdasarkan ID
        $category = BlogCategory::find($id);
        $category->delete();

        return redirect(route('admin.blogcategories.index'))->with('success', 'Kategori telah berhasil dihapus.');
    }
}

