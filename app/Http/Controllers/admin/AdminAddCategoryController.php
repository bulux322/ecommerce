<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminAddCategoryController extends Controller
{
    public $name;
    public $slug;

    public function render()
    {
        return view('admin.addcategory');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required'
        ]);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->save();

        session()->flash('message', 'Category Added!');

        return redirect()->route('admin.categories'); // Redirect ke halaman yang sesuai
    }

}
