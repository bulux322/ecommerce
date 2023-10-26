<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminManualOrderController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('admin.mcheckout',['products' => $products]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'cartype' => 'required|string',
            'zipcode' => 'required|numeric',
            'product_name' => 'required|string' // Menambahkan validasi untuk product_name
        ]);

        // Dapatkan nama produk dari input
        $productName = $request->input('product_name');

        // Cari produk sesuai dengan nama yang dipilih
        $product = Product::where('name', 'like', '%' . $productName . '%')->first();

        if ($product) {
            // Buat pesanan baru
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->firstname = $request->input('firstname');
            $order->lastname = $request->input('lastname');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->address = $request->input('address');
            $order->country = $request->input('country');
            $order->zipcode = $request->input('zipcode');
            $order->city = $request->input('city');
            $order->cartype = $request->input('cartype');
            $order->status = 'ordered';

            // Menggunakan regular_price produk sebagai subtotal
            $order->subtotal = $product->regular_price;

            // Hitung pajak (misalnya, 10% dari regular_price)
            $taxRate = 0; // Ganti dengan tarif pajak yang sesuai
            $order->tax = $product->regular_price * $taxRate;

            // Total adalah subtotal ditambah pajak
            $order->total = $order->subtotal + $order->tax;

            // Simpan pesanan
            $order->save();

            // Buat OrderItem
            $orderItem = new OrderItem([
                'product_id' => $product->id,
                'order_id' => $order->id, // Gunakan ID pesanan yang baru dibuat
                'price' => $product->regular_price,
                'quantity' => 1
            ]);

            // Simpan order item ke dalam database
            $orderItem->save();

            // Redirect atau tampilkan konfirmasi pesanan berhasil disimpan
            return redirect()->route('admin.orders')->with('success', 'Pesanan berhasil dibuat.');
        } else {
            // Produk tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan Anda
            return redirect()->back()->with('error', 'Produk tidak ditemukan. Pesanan tidak dapat dibuat.');
        }

    }
}
