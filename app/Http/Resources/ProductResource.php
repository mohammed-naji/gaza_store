<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->trans_name,
            'price' => $this->price,
            'image' => asset('images/'.$this->image->path),
            'gallery' => ImageResource::collection($this->gallery),
            'category' => new CategoryResource($this->category)
        ];
    }
}
