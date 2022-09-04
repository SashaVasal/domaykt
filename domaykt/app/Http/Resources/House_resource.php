<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class House_resource extends JsonResource
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
            'status_object'=>$this->status_object,
            'image'=>$this->image,
            'address'=>$this->address,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'longitude'=>$this->longitude,
            'latitude'=>$this->latitude,
            'entrance'=>$this->entrance,
            'is_floor'=>$this->is_floor,
        ];
    }
}
