<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate(10);
        return view('admin.categories', ['categories' => $categories]);
    }
}
