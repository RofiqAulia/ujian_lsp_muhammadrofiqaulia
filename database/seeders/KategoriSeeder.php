<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama_kategori' => 'Ayam', 'deskripsi' => 'Berbagai macam olahan ayam frozen'],
            ['nama_kategori' => 'Seafood', 'deskripsi' => 'Olahan hasil laut frozen (ikan, udang, cumi)'],
            ['nama_kategori' => 'Sapi', 'deskripsi' => 'Olahan daging sapi (bakso, sosis sapi, daging slice)'],
            ['nama_kategori' => 'Sayuran', 'deskripsi' => 'Sayuran beku seperti mixed vegetables, jagung pipil, edamame'],
            ['nama_kategori' => 'Siap Saji', 'deskripsi' => 'Makanan beku siap saji (nugget, dimsum, kebab)'],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
