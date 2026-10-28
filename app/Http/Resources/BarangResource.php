<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BarangResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'       => $this->id,
            'kode'     => $this->kode,
            'nama'     => $this->nama,
            'kategori' => $this->kategori,
            'harga'    => $this->harga,
            'stok'     => $this->stok,
            'satuan'   => $this->satuan,
            'status'   => $this->status,
            'foto' => $this->foto
    ? (str_starts_with($this->foto, 'http') ? $this->foto : asset($this->foto))
    : null,
        ];
    }
}
