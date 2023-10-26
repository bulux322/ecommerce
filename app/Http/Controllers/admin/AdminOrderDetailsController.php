<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderDetailsController extends Controller
{
    public function orderDetails($order_id)
    {
        // Ambil pesanan berdasarkan ID
        $order = Order::find($order_id);

        if (!$order) {
            return abort(404);
        }

        // Ambil detail pesanan (OrderItems) berdasarkan pesanan
        $orderItems = OrderItem::where('order_id', $order_id)->get();

        return view('admin.orderdetails', ['order' => $order, 'orderItems' => $orderItems]);
    }
}
