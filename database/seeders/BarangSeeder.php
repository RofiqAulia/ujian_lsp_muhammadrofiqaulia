<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $kategoriAyam = Kategori::where('nama_kategori', 'Ayam')->first()->id;
        $kategoriSeafood = Kategori::where('nama_kategori', 'Seafood')->first()->id;
        $kategoriSapi = Kategori::where('nama_kategori', 'Sapi')->first()->id;
        $kategoriSayuran = Kategori::where('nama_kategori', 'Sayuran')->first()->id;
        $kategoriSiapSaji = Kategori::where('nama_kategori', 'Siap Saji')->first()->id;

        $barangs = [
            // Normal Stock
            [
                'kode_barang' => 'BRG-001',
                'nama_barang' => 'Fiesta Chicken Nugget',
                'kategori_id' => $kategoriAyam,
                'satuan' => 'pack',
                'jumlah_stok' => 50,
                'stok_minimum' => 10,
                'harga_jual' => 45000,
                'harga_beli' => 38000,
                'berat_ukuran' => '500 gr',
                'lokasi_simpan' => 'Freezer A',
                'deskripsi' => 'Chicken nugget kualitas premium dari Fiesta.',
            ],
            [
                'kode_barang' => 'BRG-002',
                'nama_barang' => 'So Good Spicy Chicken',
                'kategori_id' => $kategoriAyam,
                'satuan' => 'pack',
                'jumlah_stok' => 30,
                'stok_minimum' => 5,
                'harga_jual' => 42000,
                'harga_beli' => 35000,
                'berat_ukuran' => '400 gr',
                'lokasi_simpan' => 'Freezer A',
                'deskripsi' => 'Olahan ayam pedas.',
            ],
            [
                'kode_barang' => 'BRG-003',
                'nama_barang' => 'Bakso Sapi Sumber Selera',
                'kategori_id' => $kategoriSapi,
                'satuan' => 'pack',
                'jumlah_stok' => 45,
                'stok_minimum' => 10,
                'harga_jual' => 35000,
                'harga_beli' => 28000,
                'berat_ukuran' => '50 butir',
                'lokasi_simpan' => 'Freezer B',
                'deskripsi' => 'Bakso sapi asli isi 50.',
            ],
            [
                'kode_barang' => 'BRG-004',
                'nama_barang' => 'Edamame Beku',
                'kategori_id' => $kategoriSayuran,
                'satuan' => 'pack',
                'jumlah_stok' => 25,
                'stok_minimum' => 10,
                'harga_jual' => 22000,
                'harga_beli' => 18000,
                'berat_ukuran' => '500 gr',
                'lokasi_simpan' => 'Freezer C',
                'deskripsi' => 'Edamame beku siap rebus.',
            ],
            // Low Stock (< 20)
            [
                'kode_barang' => 'BRG-005',
                'nama_barang' => 'Kanzler Sosis Beef Cocktail',
                'kategori_id' => $kategoriSapi,
                'satuan' => 'pack',
                'jumlah_stok' => 15,
                'stok_minimum' => 20,
                'harga_jual' => 55000,
                'harga_beli' => 48000,
                'berat_ukuran' => '500 gr',
                'lokasi_simpan' => 'Freezer B',
                'deskripsi' => 'Sosis sapi cocktail premium.',
            ],
            [
                'kode_barang' => 'BRG-006',
                'nama_barang' => 'Cedea Fish Dumpling Cheese',
                'kategori_id' => $kategoriSeafood,
                'satuan' => 'pack',
                'jumlah_stok' => 12,
                'stok_minimum' => 15,
                'harga_jual' => 32000,
                'harga_beli' => 26000,
                'berat_ukuran' => '500 gr',
                'lokasi_simpan' => 'Freezer C',
                'deskripsi' => 'Dumpling ikan isi keju lumer.',
            ],
            [
                'kode_barang' => 'BRG-007',
                'nama_barang' => 'Dimsum Ayam',
                'kategori_id' => $kategoriSiapSaji,
                'satuan' => 'mika',
                'jumlah_stok' => 8,
                'stok_minimum' => 10,
                'harga_jual' => 15000,
                'harga_beli' => 12000,
                'berat_ukuran' => '10 pcs',
                'lokasi_simpan' => 'Freezer D',
                'deskripsi' => 'Dimsum ayam homemade.',
            ],
            // Out of Stock (0)
            [
                'kode_barang' => 'BRG-008',
                'nama_barang' => 'Udang Kupas Beku',
                'kategori_id' => $kategoriSeafood,
                'satuan' => 'pack',
                'jumlah_stok' => 0,
                'stok_minimum' => 5,
                'harga_jual' => 65000,
                'harga_beli' => 55000,
                'berat_ukuran' => '500 gr',
                'lokasi_simpan' => 'Freezer C',
                'deskripsi' => 'Udang kupas sisa ekor.',
            ],
            [
                'kode_barang' => 'BRG-009',
                'nama_barang' => 'Belfoods Kentang Goreng',
                'kategori_id' => $kategoriSayuran,
                'satuan' => 'pack',
                'jumlah_stok' => 0,
                'stok_minimum' => 10,
                'harga_jual' => 30000,
                'harga_beli' => 25000,
                'berat_ukuran' => '1 kg',
                'lokasi_simpan' => 'Freezer D',
                'deskripsi' => 'Kentang goreng shoestring.',
            ],
            [
                'kode_barang' => 'BRG-010',
                'nama_barang' => 'Kebab Daging Sapi Mini',
                'kategori_id' => $kategoriSiapSaji,
                'satuan' => 'box',
                'jumlah_stok' => 0,
                'stok_minimum' => 5,
                'harga_jual' => 45000,
                'harga_beli' => 35000,
                'berat_ukuran' => '10 pcs',
                'lokasi_simpan' => 'Freezer D',
                'deskripsi' => 'Kebab mini isi daging sapi lada hitam.',
            ],
        ];

        foreach ($barangs as $barang) {
            Barang::create($barang);
        }
    }
}
