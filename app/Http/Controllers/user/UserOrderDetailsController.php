<?php

namespace App\Http\Controllers\user;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserOrderDetailsController extends Controller
{
    public function index($order_id)
    {
        // Ambil pesanan berdasarkan ID
        $order = Order::where('user_id', Auth::user()->id)->where('id', $order_id)->first();

        if (!$order) {
            return abort(404);
        }

        // Ambil detail pesanan (OrderItems) berdasarkan pesanan
        $orderItems = OrderItem::where('order_id', $order_id)->get();
        return view('users.orderdetails', ['order' => $order, 'orderItems' => $orderItems]);
    }
}
