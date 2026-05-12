<?php

namespace App\Filament\Resources\Kategoris\Pages;

use App\Filament\Resources\Kategoris\KategoriResource;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ViewKategori extends ViewRecord
{
    protected static string $resource = KategoriResource::class;

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
                Section::make('Identitas Kategori')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('kode_kategori')
                            ->label('Kode Kategori')
                            ->badge()
                            ->color('info'),
                        TextEntry::make('nama_kategori')
                            ->label('Nama Kategori'),
                        TextEntry::make('deskripsi')
                            ->label('Deskripsi')
                            ->columnSpanFull(),
                    ]),
                Section::make('Statistik')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('barangs_count')
                            ->label('Jumlah Barang')
                            ->state(fn ($record) => $record->barangs()->count())
                            ->badge()
                            ->color('success'),
                        TextEntry::make('created_at')
                            ->label('Ditambahkan')
                            ->dateTime('d M Y, H:i'),
                        TextEntry::make('updated_at')
                            ->label('Diperbarui')
                            ->dateTime('d M Y, H:i'),
                    ]),
            ]);
    }
}
