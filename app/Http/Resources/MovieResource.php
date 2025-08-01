<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource  extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
     public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'genre_id'     => $this->genre_id,
            'genre_name'   => $this->genre?->name, 
            'year'         => $this->year,
            'duration'     => $this->duration,
            'language'     => $this->language,
            'poster_url'   => $this->poster_url,
            'description'  => $this->description,
            'trailer_url'  => $this->trailer_url,
            'age_rating'   => $this->age_rating,
        ];
    }
}
