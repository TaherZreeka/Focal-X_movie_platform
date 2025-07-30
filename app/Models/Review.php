<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\User\ReviewController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{ use HasFactory, Notifiable, HasApiTokens ;
      protected $fillable = [

        'id',
        'user_id',
        'movie_id',
        'rating',
        'comment',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
