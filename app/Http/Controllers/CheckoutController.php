<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    public $country;
    public $city;
    public $cartype;
    public $zipcode;

    public function placeOrder(Request $request)
    {
        // Validasi data input
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'cartype' => 'required',
            'zipcode' => 'required|numeric'
        ]);

        // Simpan pesanan
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->country = $request->input('country');
        $order->city = $request->input('city');
        $order->cartype = $request->input('cartype');
        $order->zipcode = $request->input('zipcode');

        // Hitung subtotal, tax, dan total dari keranjang belanja
        $subtotal = str_replace(',', '', Cart::instance('cart')->subtotal()); // Menghilangkan tanda koma
        $tax = str_replace(',', '', Cart::instance('cart')->tax()); // Menghilangkan tanda koma
        $total = str_replace(',', '', Cart::instance('cart')->total()); // Menghilangkan tanda koma
        $order->subtotal = $subtotal;
        $order->tax = $tax;
        $order->total = $total;
        $order->status = 'ordered';
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        // Hapus keranjang belanja (cart) setelah pesanan dibuat
        Cart::instance('cart')->destroy();

        // Redirect ke halaman "Thank You" atau halaman lain sesuai dengan kebijakan Anda
        return view('thankyou'); // Anda dapat membuat halaman "Thank You" sendiri.
    }

    public function index()
    {
        return view('checkout');
    }

}

