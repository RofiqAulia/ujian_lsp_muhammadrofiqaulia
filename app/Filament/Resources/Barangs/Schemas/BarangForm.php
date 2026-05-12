<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make()
                    ->columns(2)
                    ->schema([
                        TextInput::make('kode_barang')
                            ->label('Kode Barang')
                            ->required()
                            ->unique(table: 'barangs', column: 'kode_barang', ignoreRecord: true)
                            ->maxLength(50)
                            ->placeholder('Contoh: BRG-001')
                            ->columnSpan(1),
                        TextInput::make('nama_barang')
                            ->required()
                            ->maxLength(255),
                        \Filament\Forms\Components\Select::make('kategori_id')
                            ->relationship('kategori', 'nama_kategori')
                            ->searchable()
                            ->preload()
                            ->label('Kategori'),
                        TextInput::make('satuan')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('jumlah_stok')
                            ->required()
                            ->numeric()
                            ->default(0),
                        TextInput::make('stok_minimum')
                            ->required()
                            ->numeric()
                            ->default(0),
                        TextInput::make('harga_jual')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0.0),
                        TextInput::make('harga_beli')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0.0),
                        TextInput::make('berat_ukuran')
                            ->maxLength(255),
                        TextInput::make('lokasi_simpan')
                            ->maxLength(255),
                    ]),
                \Filament\Schemas\Components\Section::make()
                    ->schema([
                        Textarea::make('deskripsi')
                            ->columnSpanFull(),
                        \Filament\Forms\Components\FileUpload::make('foto')
                            ->image()
                            ->directory('barangs')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
