<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropUnique('barangs_kode_barang_unique');
            $table->string('kode_barang')->nullable()->change();
            $table->unique('kode_barang');
        });

        Schema::table('kategoris', function (Blueprint $table) {
            $table->dropUnique('kategoris_kode_kategori_unique');
            $table->string('kode_kategori')->nullable()->change();
            $table->unique('kode_kategori');
        });
    }

    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropUnique('barangs_kode_barang_unique');
            $table->string('kode_barang')->nullable(false)->change();
            $table->unique('kode_barang');
        });

        Schema::table('kategoris', function (Blueprint $table) {
            $table->dropUnique('kategoris_kode_kategori_unique');
            $table->string('kode_kategori')->nullable(false)->change();
            $table->unique('kode_kategori');
        });
    }
};
