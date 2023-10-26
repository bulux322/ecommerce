<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::user()->id)->paginate(12);
        Paginator::useBootstrap();
        return view('users.index',['orders'=>$orders]);
    }
}
