<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $movies = Movie::all();

        foreach ($movies as $movie) {
            foreach ($users as $user) {
                Review::create([
                    'user_id'  => $user->id,
                    'movie_id' => $movie->id,
                    'rating'   => rand(1, 5),
                    'comment'  => 'This is a sample comment on the movie: ' . $movie->title,
                    'approved' => true,
                ]);
            }
        }
    }
}
