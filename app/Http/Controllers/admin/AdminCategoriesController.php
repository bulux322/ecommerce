<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class AdminCategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate(6);
        Paginator::useBootstrap();
        return view('admin.categories', ['categories' => $categories]);
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.editcategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->save();

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully');
    }

}
