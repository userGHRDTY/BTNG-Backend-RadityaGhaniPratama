<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->enum('kategori', ['Sembako', 'Pertanian', 'Minuman', 'Rumah Tangga', 'Lainnya']);
            $table->unsignedInteger('harga');
            $table->unsignedInteger('stok')->default(0);
            $table->enum('satuan', ['pcs', 'kg', 'liter', 'karung', 'dus']);
            $table->enum('status', ['tersedia', 'habis'])->default('tersedia');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};