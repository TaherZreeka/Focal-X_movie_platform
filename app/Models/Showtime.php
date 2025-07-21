<?php

namespace App\Models;

use App\Enums\ShowTypeEnum;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
     protected $fillable = [
        'id',
        'movie_id',
        'date',
        'time',
        'hall',
        'price',
        'show_type',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'time' => 'datetime:H:i',
            'price' => 'decimal:2',
            'show_type' => ShowTypeEnum::class,
        ];
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
