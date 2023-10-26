<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(5);
        Paginator::useBootstrap();
        return view('admin.index',['orders'=>$orders]);
    }
}
