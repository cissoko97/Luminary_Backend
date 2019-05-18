<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Luminar extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'category'=> $this->category,
            'description'=> $this->description,
            'imgSrc'=> $this->imgSrc,
            'distance'=> (double) $this->distance,
            'discoveryYear'=> (int) $this->discoveryYear,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
