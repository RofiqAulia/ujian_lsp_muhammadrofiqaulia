<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Barang extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function getFotoUrlAttribute()
    {
        return $this->foto ? Storage::url($this->foto) : asset('img/no-image.png');
    }
}
