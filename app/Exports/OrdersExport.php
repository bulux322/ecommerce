<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrdersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }
    public function headings(): array
    {
        // Daftar judul kolom sesuai dengan urutan kolom dalam tabel rekam
        return [
            'Order-Id',
            'User-Id',
            'Sub-Total',
            'PPN',
            'Total',
            'Nama Depan',
            'Nama Belakang',
            'Email',
            'Nomor Telepon',
            'Alamat',
            'Negara',
            'Kode-Pos',
            'Kota',
            'Tipe-Mobil',
            'Status',
            'Tanggal-Order',
            'Tanggal-Order'
        ];
    }
}
