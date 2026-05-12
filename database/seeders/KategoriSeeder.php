<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['kode_kategori' => 'KAT-001', 'nama_kategori' => 'Ayam', 'deskripsi' => 'Berbagai macam olahan ayam frozen'],
            ['kode_kategori' => 'KAT-002', 'nama_kategori' => 'Seafood', 'deskripsi' => 'Olahan hasil laut frozen (ikan, udang, cumi)'],
            ['kode_kategori' => 'KAT-003', 'nama_kategori' => 'Sapi', 'deskripsi' => 'Olahan daging sapi (bakso, sosis sapi, daging slice)'],
            ['kode_kategori' => 'KAT-004', 'nama_kategori' => 'Sayuran', 'deskripsi' => 'Sayuran beku seperti mixed vegetables, jagung pipil, edamame'],
            ['kode_kategori' => 'KAT-005', 'nama_kategori' => 'Siap Saji', 'deskripsi' => 'Makanan beku siap saji (nugget, dimsum, kebab)'],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
