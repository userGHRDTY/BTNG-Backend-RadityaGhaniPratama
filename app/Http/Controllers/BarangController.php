<?php

namespace App\Http\Controllers;

use App\Http\Resources\BarangResource;
use App\Models\Barang;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    /**
     * Daftar semua barang
     *
     * Bisa difilter dengan ?kategori=Sembako, ?status=tersedia, atau dicari dengan ?search=beras.
     */
    public function index(Request $request)
    {
        $query = Barang::query();

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        return BarangResource::collection($query->orderBy('id')->get())
            ->additional(['message' => 'Daftar barang berhasil diambil']);
    }

    /**
     * Tambah barang baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode'     => 'required|string|max:30|unique:barang,kode',
            'nama'     => 'required|string|max:255',
            'kategori' => 'required|in:Sembako,Pertanian,Minuman,Rumah Tangga,Lainnya',
            'harga'    => 'required|integer|min:0',
            'stok'     => 'required|integer|min:0',
            'satuan'   => 'required|in:pcs,kg,liter,karung,dus',
            'status'   => 'required|in:tersedia,habis',
            'foto'     => 'nullable|url',
        ], [
            'kode.required'  => 'Kolom kode barang wajib diisi.',
            'kode.unique'    => 'Kode barang sudah dipakai.',
            'nama.required'  => 'Kolom nama barang wajib diisi.',
            'harga.required' => 'Kolom harga wajib diisi.',
            'harga.integer'  => 'Kolom harga harus berupa angka.',
            'stok.integer'   => 'Kolom stok harus berupa angka.',
        ]);

        $barang = Barang::create($validated);

        return (new BarangResource($barang))
            ->additional(['message' => 'Data barang berhasil ditambahkan'])
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Detail satu barang
     */
    public function show(string $id)
    {
        $barang = Barang::find($id);

        if (! $barang) {
            return response()->json(['message' => 'Data barang tidak ditemukan'], 404);
        }

        return (new BarangResource($barang))
            ->additional(['message' => 'Detail barang berhasil diambil']);
    }

    /**
     * Perbarui data barang
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::find($id);

        if (! $barang) {
            return response()->json(['message' => 'Data barang tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'kode'     => ['sometimes', 'required', 'string', 'max:30', Rule::unique('barang', 'kode')->ignore($barang->id)],
            'nama'     => 'sometimes|required|string|max:255',
            'kategori' => 'sometimes|required|in:Sembako,Pertanian,Minuman,Rumah Tangga,Lainnya',
            'harga'    => 'sometimes|required|integer|min:0',
            'stok'     => 'sometimes|required|integer|min:0',
            'satuan'   => 'sometimes|required|in:pcs,kg,liter,karung,dus',
            'status'   => 'sometimes|required|in:tersedia,habis',
            'foto'     => 'nullable|url',
        ]);

        $barang->update($validated);

        return (new BarangResource($barang))
            ->additional(['message' => 'Data barang berhasil diperbarui']);
    }

    /**
     * Hapus barang
     */
    public function destroy(string $id): JsonResponse
    {
        $barang = Barang::find($id);

        if (! $barang) {
            return response()->json(['message' => 'Data barang tidak ditemukan'], 404);
        }

        $barang->delete();

        return response()->json(['message' => 'Data barang berhasil dihapus']);
    }
}