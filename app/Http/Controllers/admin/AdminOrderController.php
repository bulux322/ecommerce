<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Exports\OrdersExport;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(12);
        Paginator::useBootstrap();
        return view('admin.uorders',['orders'=>$orders]);
    }
    public function exportOrders()
    {
        return Excel::download(new OrdersExport, 'orderanLaporan.xlsx');
    }
}
