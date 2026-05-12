<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Barangs\Tables\BarangsTable;
use App\Models\Barang;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class DaftarBarangWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    /**
     * Reusable form schema for Create & Edit modals.
     */
    private static function formSchema(): array
    {
        return [
            Section::make()
                ->columns(2)
                ->schema([
                    TextInput::make('kode_barang')
                        ->label('Kode Barang')
                        ->required()
                        ->maxLength(50)
                        ->placeholder('Contoh: BRG-001'),
                    TextInput::make('nama_barang')
                        ->required()
                        ->maxLength(255),
                    Select::make('kategori_id')
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
            Section::make()
                ->schema([
                    Textarea::make('deskripsi')
                        ->columnSpanFull(),
                    FileUpload::make('foto')
                        ->image()
                        ->directory('barangs')
                        ->columnSpanFull(),
                ]),
        ];
    }

    public function table(Table $table): Table
    {
        $table = BarangsTable::configure($table);

        return $table
            ->query(Barang::query()->latest())
            ->heading('Daftar Barang')
            ->headerActions([
                // Tambah Barang — modal, tidak redirect
                CreateAction::make()
                    ->label('Tambah Barang')
                    ->model(Barang::class)
                    ->form(self::formSchema()),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make()
                        ->form(self::formSchema()),
                    EditAction::make()
                        ->form(self::formSchema()),
                    DeleteAction::make(),
                ])->label('Aksi'),
            ]);
    }
}
