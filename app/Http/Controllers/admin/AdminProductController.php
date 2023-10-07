<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $image;
    public $category_id;

    public function index()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        Paginator::useBootstrap();
        return view('admin.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil kategori-kategori yang akan ditampilkan di form tambah produk
        $categories = Category::all();

        // Tampilkan halaman tambah produk dengan kategori-kategori
        return view('admin.addproduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $this->validate($request, [
            'name' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'sku' => 'required|string',
            'stock_status' => 'required|in:instock,outofstock',
            'featured' => 'boolean',
            'quantity' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan jenis gambar yang diizinkan dan batas ukuran yang diinginkan
            'category_id' => 'required|exists:categories,id', // Pastikan kategori yang dipilih ada dalam database
        ]);

        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');

            // Mendapatkan nama asli berkas
            $imageName = Carbon::now()->timestamp . '.' . $uploadedImage->extension();

            // Menyimpan berkas dengan nama yang sesuai
            $imagePath = $uploadedImage->storeAs('productsIMG', $imageName);
        } else {
            $imagePath = null;
        }

        // Simpan produk ke database
        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('slug'));
        $product->short_description = $request->input('short_description');
        $product->description = $request->input('description');
        $product->regular_price = $request->input('regular_price');
        $product->sale_price = $request->input('sale_price');
        $product->sku = $request->input('sku');
        $product->stock_status = $request->input('stock_status');
        $product->featured = $request->input('featured', 0);
        $product->quantity = $request->input('quantity');
        $product->image = $imagePath;
        $product->category_id = $request->input('category_id');
        $product->save();

        // Redirect ke halaman yang sesuai dengan notifikasi sukses atau pesan sukses lainnya
        return redirect()->route('admin.product')->with('success', 'Product added successfully');
    }
    public function destroy($id)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus berkas gambar terkait jika ada
        if (!is_null($product->image)) {
            // Hapus berkas gambar dari storage
            File::delete(public_path('productsIMG/' . $product->image));
        }

        // Hapus produk dari database
        $product->delete();

        // Redirect kembali ke halaman daftar produk dengan pesan sukses
        return redirect()->route('admin.product')->with('success', 'Product deleted successfully');
    }
}
