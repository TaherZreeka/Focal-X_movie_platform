<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
      protected $fillable = [
        'id',
        'name'
    ];
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
