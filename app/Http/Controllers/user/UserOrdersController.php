<?php

namespace App\Http\Controllers\user;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class UserOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::user()->id)->paginate(12);
        Paginator::useBootstrap();
        return view('users.orders',['orders'=>$orders]);
    }
}
