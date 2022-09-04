<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Flat_collection extends JsonResource
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
            'id'=>$this->id,
            'status_flat'=>$this->status_flat,
            'price_for_square'=>$this->price_for_square,
            'rooms'=>$this->rooms,
            'square'=>$this->square,
            'total_price'=>$this->image
        ];
    }
}
