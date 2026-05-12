<?php

namespace App\Filament\Resources\Barangs\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\ImageColumn::make('foto')
                    ->circular(),
                TextColumn::make('kode_barang')
                    ->label('Kode')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('warning'),
                TextColumn::make('nama_barang')
                    ->searchable(),
                TextColumn::make('kategori.nama_kategori')
                    ->sortable()
                    ->label('Kategori'),
                TextColumn::make('satuan')
                    ->searchable(),
                TextColumn::make('jumlah_stok')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->color(fn ($record) => $record->jumlah_stok <= $record->stok_minimum ? 'danger' : 'success'),
                TextColumn::make('stok_minimum')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('harga_jual')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('harga_beli')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('lokasi_simpan')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->since()
                    ->tooltip(fn ($record) => $record->created_at->translatedFormat('d F Y, H:i')),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                \Filament\Tables\Filters\SelectFilter::make('kategori_id')
                    ->relationship('kategori', 'nama_kategori')
                    ->label('Kategori'),
                \Filament\Tables\Filters\TernaryFilter::make('low_stock')
                    ->label('Stok Menipis')
                    ->queries(
                        true: fn ($query) => $query->whereColumn('jumlah_stok', '<=', 'stok_minimum'),
                        false: fn ($query) => $query->whereColumn('jumlah_stok', '>', 'stok_minimum'),
                        blank: fn ($query) => $query,
                    ),
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    ViewAction::make(),
                    DeleteAction::make(),
                ])->label('Aksi'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
