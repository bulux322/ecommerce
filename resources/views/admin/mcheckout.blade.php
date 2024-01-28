@extends('layouts.baseadmin')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
              <h4 class="card-title">Tambah Pesanan Manual</h4>
              <div class="table-responsive">
                <form action="{{ route('admin.manual-order.store') }}" method="POST" name="frm-billing">
                    @csrf
                    {{-- <div class="mb-3 mt-3">
                        <label for="product_search" class="form-label">Product<span>*</span></label>
                        <select name="product_search" class="form-control">
                            <option value="">Pilih Produk</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->name }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('product_search')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> --}}
                    <div class="mb-3 mt-3">
                        <label for="product_name" class="form-label">Produk<span>*</span></label>
                        <select name="product_name" class="form-control">
                            <option value="" data-price="0.00">Pilih Produk</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->name }}" data-price="{{ $product->regular_price }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('product_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Nama Depan<span>*</span></label>
                        <input type="text" name="firstname" class="form-control" placeholder="Nama Depan Anda">
                        @error('firstname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="lastname" class="form-label">Nama Belakang<span>*</span></label>
                        <input type="text" name="lastname" class="form-control" placeholder="Nama Belakang Anda">
                        @error('lastname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="phone" class="form-label">Nomor Telepon<span>*</span></label>
                        <input type="number" name="phone" class="form-control" placeholder="Masukan Nomor Telepon 11 Angka">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="address" class="form-label">Alamat :</label>
                        <input type="text" name="address" class="form-control" placeholder="Masukan Alamat Lengkap">
                        @error('address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="country" class="form-label">Negara<span>*</span></label>
                        <input type="text" name="country" class="form-control" placeholder="Masukan Negara">
                        @error('country')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="zipcode" class="form-label">Kode Pos :</label>
                        <input type="number" name="zipcode" class="form-control" placeholder="Kode Pos Anda">
                        @error('zipcode')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="city" class="form-label">Kota<span>*</span></label>
                        <input type="text" name="city" class="form-control" placeholder="Kota Anda">
                        @error('city')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="cartype" class="form-label">Tipe Mobil<span>*</span></label>
                        <input type="text" name="cartype" class="form-control" placeholder="Car type">
                        @error('cartype')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <div class="mb-3 mt-3">
                        <label for="subtotal" class="form-label">Sub Total<span>*</span></label>
                        <input type="text" name="subtotal" class="form-control" placeholder="subtotal">
                        @error('subtotal')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tax" class="form-label">Tax<span>*</span></label>
                        <input type="text" name="tax" class="form-control" placeholder="tax">
                        @error('tax')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> --}}
                    <div class="mb-3 mt-3">
                        <label for="subtotal" class="form-label">Sub Total<span>*</span></label>
                        <input type="text" name="subtotal" id="subtotal" class="form-control" placeholder="subtotal" readonly>
                        @error('subtotal')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tax" class="form-label">Pajak<span>*</span></label>
                        <input type="text" name="tax" id="tax" class="form-control" placeholder="tax" readonly>
                        @error('tax')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3" class="form-label">
                        <div class="summary-item payment-method">
                            <h4 class="title-box">Metode Pembayaran</h4>
                            <div class="choose-payment-methods">
                                <label class="payment-method">
                                    <input name="payment-method" id="payment-method-cod" value="cod" type="radio">
                                    <span>Cash On Delivery</span>
                                    <span class="payment-desc">Pembayaran ditempat 25% dari harga produk, beserta gratis pemasangan.</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Order</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
{{-- <script>
    // Ambil elemen-elemen yang diperlukan
    const productSelect = document.querySelector('select[name="product_name"]');
    const subtotalInput = document.querySelector('input[name="subtotal"]');
    const taxInput = document.querySelector('input[name="tax"]');

    // Tambahkan event listener saat pilihan produk berubah
    productSelect.addEventListener('change', function () {
        // Ambil harga produk yang dipilih
        const selectedProduct = productSelect.options[productSelect.selectedIndex];
        const productPrice = parseFloat(selectedProduct.getAttribute('data-price'));

        // Hitung subtotal dan pajak
        const subtotal = productPrice;
        const taxRate = 0.10; // Ganti dengan tarif pajak yang sesuai
        const tax = subtotal * taxRate;

        // Isi nilai subtotal dan pajak ke dalam input
        subtotalInput.value = `Rp.${subtotal.toFixed(2)}`;
        taxInput.value = `Rp.${tax.toFixed(2)}`;
    });
</script> --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dapatkan elemen select dan input subtotal
        const productSelect = document.querySelector('select[name="product_name"]');
        const subtotalInput = document.querySelector('input[name="subtotal"]');

        // Tambahkan event listener ketika pilihan produk berubah
        productSelect.addEventListener("change", function () {
            const selectedOption = productSelect.selectedOptions[0];
            const selectedPrice = selectedOption.getAttribute("data-price");

            // Perbarui input subtotal dengan harga produk yang dipilih
            subtotalInput.value = selectedPrice;
        });
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dapatkan elemen select dan input subtotal, tax
        const productSelect = document.querySelector('select[name="product_name"]');
        const subtotalInput = document.querySelector('input[name="subtotal"]');
        const taxInput = document.querySelector('input[name="tax"]');

        // Tambahkan event listener ketika pilihan produk berubah
        productSelect.addEventListener("change", function () {
            const selectedOption = productSelect.selectedOptions[0];
            const selectedPrice = selectedOption.getAttribute("data-price");

            // Perbarui input subtotal dengan harga produk yang dipilih
            subtotalInput.value = selectedPrice;

            // Hitung pajak (misalnya, 10% dari harga produk)
            const taxRate = 0; // Ganti dengan tarif pajak yang sesuai
            const calculatedTax = selectedPrice * taxRate;

            // Perbarui input tax dengan nilai pajak yang dihitung
            taxInput.value = calculatedTax.toFixed(2);
        });
    });
</script>

