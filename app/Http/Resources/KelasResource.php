<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KelasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tingkat' => $this->tingkat,
            'nama_kelas' => $this->nama_kelas,
            'walikelas' => $this->waliKelas ? [
                'user_id' => $this->waliKelas->id,
                'nama' => $this->waliKelas->nama,
                'nomor_induk' => $this->waliKelas->no_induk,
            ] : null,
        ];
    }
}