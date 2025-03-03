<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BAR01',
                'barang_nama' => 'Laptop',
                'harga_beli' => '5500000',
                'harga_jual' => '6000000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BAR02',
                'barang_nama' => 'Handphone',
                'harga_beli' => '1000000',
                'harga_jual' => '1200000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'BAR03',
                'barang_nama' => 'Gamis Pink',
                'harga_beli' => '50000',
                'harga_jual' => '60000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BAR04',
                'barang_nama' => 'Jaket Jeans',
                'harga_beli' => '100000',
                'harga_jual' => '130000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BAR05',
                'barang_nama' => 'Sapu',
                'harga_beli' => '30000',
                'harga_jual' => '35000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BAR06',
                'barang_nama' => 'Piring /pack',
                'harga_beli' => '40000',
                'harga_jual' => '45000',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BAR07',
                'barang_nama' => 'Buku /pack',
                'harga_beli' => '25000',
                'harga_jual' => '28000',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'BAR08',
                'barang_nama' => 'Bulpen',
                'harga_beli' => '1500',
                'harga_jual' => '2000',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BAR09',
                'barang_nama' => 'KitKat',
                'harga_beli' => '7000',
                'harga_jual' => '7500',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BAR10',
                'barang_nama' => 'Qtela',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
