<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Flat_resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'status_flat' => $this->status_flat,
            'price_for_square' =>$this->price_for_square,
            'house_id' =>$this->house_id,
            'rooms' =>$this->rooms,
            'square' =>$this->square,
            'total_price' =>$this->total_price,
            'image' => $this->image,
        ];
    }
}
