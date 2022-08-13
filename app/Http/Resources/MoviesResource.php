<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoviesResource extends JsonResource
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
            'id' => $this->id,
            'link_img' => $this->link_img,
            'name' => $this->name,
            'status' => $this->status,
            'director' => $this->director,
            'national' => $this->national,
            'released' => $this->released,
            'timing' => $this->timing,
            'view' => $this->view,
            'slug' => $this->slug,
        ];
    }
}
