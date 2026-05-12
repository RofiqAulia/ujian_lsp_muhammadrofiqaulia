<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $stokMenipis = \App\Models\Barang::whereColumn('jumlah_stok', '<=', 'stok_minimum')->where('jumlah_stok', '>', 0)->count();
        $stokHabis = \App\Models\Barang::where('jumlah_stok', '<=', 0)->count();

        return [
            Stat::make('Total Kategori', \App\Models\Kategori::count())
                ->description('Jumlah kategori produk')
                ->color('primary'),
            Stat::make('Total Barang', \App\Models\Barang::count())
                ->description('Total jenis barang')
                ->color('success'),
            Stat::make('Stok Menipis', $stokMenipis)
                ->description('Barang hampir habis')
                ->color('warning'),
            Stat::make('Stok Habis', $stokHabis)
                ->description('Barang kosong')
                ->color('danger'),
        ];
    }
}
