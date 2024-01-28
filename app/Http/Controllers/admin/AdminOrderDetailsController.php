<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderDetailsController extends Controller
{
    public function updateOrderStatus($order_id)
    {
        // Ambil nilai 'new_status' dari data formulir yang dikirim
        $new_status = request('new_status');

        // Validasi status baru sesuai dengan enum yang telah ditentukan
        $validStatuses = ['pending', 'terverifikasi', 'dibatalkan'];
        if (!in_array($new_status, $validStatuses)) {
            return abort(400, 'Invalid status');
        }

        $order = Order::find($order_id);

        if (!$order) {
            return abort(404);
        }

        // Update status pesanan
        $order->status = $new_status;
        $order->save();

        return redirect()->route('admin.orderdetails', ['order_id' => $order_id])
            ->with('success', 'Status pesanan berhasil diperbarui');
    }

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
