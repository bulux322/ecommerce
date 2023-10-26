<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('cart',['cartItems'=>$cartItems]);
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);

        // Hitung harga produk berdasarkan sale_price jika tersedia dan tidak sama dengan 0
        if ($product->sale_price && $product->sale_price > 0) {
            $price = $product->sale_price;
        } else {
            $price = $product->regular_price;
        }

        Cart::instance('cart')->add($product->id, $product->name, $quantity, $price)->associate('App\Models\Product');

        return redirect()->back()->with('message', 'Success Add Item!');
    }

    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId,$request->quantity);
        return redirect()->route('cart.index');
    }

    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }

    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }

}
