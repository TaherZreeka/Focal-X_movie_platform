<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
         protected $fillable = [
            'id',
            'title',
            'genre_id',
            'year',
            'duration',
            'language',
            'poster_url',
            'description',
            'trailer_url',
            'age_rating',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
     public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
    
    public function ratings()
     {
    return $this->hasMany(Rating::class);
     }

}
