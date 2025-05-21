<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'nama' => $this->nama,
            'nomor_induk' => $this->no_induk,
            'role' => [
                'id' => $this->role->id,
                'nama' => $this->role->nama_role,
            ],
            'kelas' => [
                'id' => $this->kelas ? $this->kelas->id : null,
                'tingkat' => $this->kelas ? $this->kelas->tingkat : null,
                'nama_kelas' => $this->kelas ? $this->kelas->nama_kelas : null
            ],
        ];
    }
}