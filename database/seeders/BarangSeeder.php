<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kode' => 'KD-001', 'nama' => 'Beras Premium 5 kg', 'kategori' => 'Sembako', 'harga' => 68000, 'stok' => 40, 'satuan' => 'karung', 'status' => 'tersedia', 'foto' => 'images/barang/KD-001-beras-premium-5-kg.png'],
            ['kode' => 'KD-002', 'nama' => 'Minyak Goreng 1 Liter', 'kategori' => 'Sembako', 'harga' => 17000, 'stok' => 60, 'satuan' => 'liter', 'status' => 'tersedia', 'foto' => 'images/barang/KD-002-minyak-goreng-1-liter.png'],
            ['kode' => 'KD-003', 'nama' => 'Gula Pasir', 'kategori' => 'Sembako', 'harga' => 16000, 'stok' => 35, 'satuan' => 'kg', 'status' => 'tersedia', 'foto' => 'images/barang/KD-003-gula-pasir.png'],
            ['kode' => 'KD-004', 'nama' => 'Pupuk Urea Subsidi', 'kategori' => 'Pertanian', 'harga' => 112500, 'stok' => 20, 'satuan' => 'karung', 'status' => 'tersedia', 'foto' => 'images/barang/KD-004-pupuk-urea-subsidi.png'],
            ['kode' => 'KD-005', 'nama' => 'Benih Jagung Hibrida', 'kategori' => 'Pertanian', 'harga' => 95000, 'stok' => 15, 'satuan' => 'kg', 'status' => 'tersedia', 'foto' => 'images/barang/KD-005-benih-jagung-hibrida.png'],
            ['kode' => 'KD-006', 'nama' => 'Kopi Bubuk Lokal', 'kategori' => 'Minuman', 'harga' => 25000, 'stok' => 50, 'satuan' => 'pcs', 'status' => 'tersedia', 'foto' => 'images/barang/KD-006-kopi-bubuk-lokal.png'],
            ['kode' => 'KD-007', 'nama' => 'Air Mineral Galon', 'kategori' => 'Minuman', 'harga' => 20000, 'stok' => 0, 'satuan' => 'pcs', 'status' => 'habis', 'foto' => 'images/barang/KD-007-air-mineral-galon.png'],
            ['kode' => 'KD-008', 'nama' => 'Sabun Cuci Piring', 'kategori' => 'Rumah Tangga', 'harga' => 9500, 'stok' => 70, 'satuan' => 'pcs', 'status' => 'tersedia', 'foto' =>'images/barang/KD-008-sabun-cuci-piring.png'],
            ['kode' => 'KD-009', 'nama' => 'Telur Ayam Kampung', 'kategori' => 'Sembako', 'harga' => 2800, 'stok' => 0, 'satuan' => 'pcs', 'status' => 'habis', 'foto' => 'images/barang/KD-009-telur-ayam-kampung.png'],
            ['kode' => 'KD-010', 'nama' => 'Tepung Terigu', 'kategori' => 'Sembako', 'harga' => 13000, 'stok' => 45, 'satuan' => 'kg', 'status' => 'tersedia', 'foto' => 'images/barang/KD-010-tepung-terigu.png'],
        ];

        foreach ($data as $item) {
            Barang::create($item);
        }
    }
}