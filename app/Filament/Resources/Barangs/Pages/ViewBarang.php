<?php

namespace App\Filament\Resources\Barangs\Pages;

use App\Filament\Resources\Barangs\BarangResource;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Schema;

class ViewBarang extends ViewRecord
{
    protected static string $resource = BarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Barang')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('kode_barang')
                            ->label('Kode Barang')
                            ->badge()
                            ->color('warning'),
                        TextEntry::make('nama_barang')
                            ->label('Nama Barang'),
                        TextEntry::make('kategori.nama_kategori')
                            ->label('Kategori')
                            ->badge()
                            ->color('info'),
                        TextEntry::make('satuan')
                            ->label('Satuan'),
                    ]),
                Section::make('Informasi Stok & Harga')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('jumlah_stok')
                            ->label('Jumlah Stok')
                            ->badge()
                            ->color(fn ($record) => $record->jumlah_stok <= $record->stok_minimum ? 'danger' : 'success'),
                        TextEntry::make('stok_minimum')
                            ->label('Stok Minimum'),
                        TextEntry::make('harga_jual')
                            ->label('Harga Jual')
                            ->money('IDR'),
                        TextEntry::make('harga_beli')
                            ->label('Harga Beli')
                            ->money('IDR'),
                    ]),
                Section::make('Detail Lainnya')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('berat_ukuran')
                            ->label('Berat / Ukuran'),
                        TextEntry::make('lokasi_simpan')
                            ->label('Lokasi Simpan'),
                        TextEntry::make('deskripsi')
                            ->label('Deskripsi')
                            ->columnSpanFull(),
                        TextEntry::make('created_at')
                            ->label('Ditambahkan')
                            ->dateTime('d M Y, H:i'),
                        TextEntry::make('updated_at')
                            ->label('Diperbarui')
                            ->dateTime('d M Y, H:i'),
                    ]),
                Section::make('Foto')
                    ->schema([
                        ImageEntry::make('foto')
                            ->label('')
                            ->height(200)
                            ->columnSpanFull(),
                    ])
                    ->visible(fn ($record) => $record->foto !== null),
            ]);
    }
}
