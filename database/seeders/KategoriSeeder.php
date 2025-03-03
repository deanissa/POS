<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'EL01',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'PAK02',
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'PE03',
                'kategori_nama' => 'Perabotan',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'ATK04',
                'kategori_nama' => 'Alat Tulis Kantor',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'MAK05',
                'kategori_nama' => 'Makanan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
