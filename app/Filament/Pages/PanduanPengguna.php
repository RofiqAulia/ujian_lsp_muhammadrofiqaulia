<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PanduanPengguna extends Page
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-book-open';

    protected string $view = 'filament.pages.panduan-pengguna';

    protected static ?string $navigationLabel = 'Panduan Pengguna';

    protected static ?string $title = 'Panduan Pengguna';

    protected static ?int $navigationSort = 99;
}
