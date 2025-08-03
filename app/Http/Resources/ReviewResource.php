<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
     public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'rating'    => $this->rating,
            'comment'   => $this->comment,
            'approved'  => $this->approved,
            'user'      => [
                'id'    => $this->user->id ?? null,
                'name'  => $this->user->name ?? null,
                'email' => $this->user->email ?? null,
            ],
            'movie_id'  => $this->movie_id,
            'movie_name'   => $this->movie?->title,
        ];
    }
}
