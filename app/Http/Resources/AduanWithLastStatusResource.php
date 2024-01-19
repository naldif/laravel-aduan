<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AduanWithLastStatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Mendapatkan status terakhir dari array status
        $lastStatus = $this->status->last();

        return [
            'id' => $this->id,
            'title' => $this->title,
            'isi_aduan' => $this->isi_aduan,
            'kecamatan' => $this->kecamatan,
            'id_kecamatan' => $this->id_kecamatan,
            'desa_kelurahan' => $this->desa_kelurahan,
            'status' => [
                'status' => $lastStatus ? $lastStatus->status : '',
                'created_at' => $lastStatus ? $lastStatus->created_at->format('d M Y') : '',
            ],
            'created_at' => $this->created_at->format('d M Y'),
            'slug' => $this->slug,
            'image' => asset('/storage/aduan/' . $this->image),
            'user' => new UserResource($this->whenLoaded('user')),
            'tags' => TagResource::collection($this->whenLoaded('tags')),
        ];
    }
}
