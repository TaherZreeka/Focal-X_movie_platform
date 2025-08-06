<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{

    public function run(): void
    {
        $movie1 = Movie::create([
    'title' => 'Inception',
    'genre_id' => 1,
    'year' => 2010,
    'duration' => 148,
    'language' => 'English',
    'poster_url' => 'https://image.tmdb.org/t/p/original/qmDpIHrmpJINaRKAfWQfftjCdyi.jpg',
    'description' => 'A mind-bending thriller by Christopher Nolan.',
    'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
    'age_rating' => 'PG-13',
    'movie_url' => 'https://example.com/movies/inception.mp4',
]);

$movie2 = Movie::create([
    'title' => 'Interstellar',
    'genre_id' => 1,
    'year' => 2014,
    'duration' => 169,
    'language' => 'English',
    'poster_url' => 'https://image.tmdb.org/t/p/original/rAiYTfKGqDCRIIqo664sY9XZIvQ.jpg',
    'description' => 'Exploring space and time to save humanity.',
    'trailer_url' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
    'age_rating' => 'PG-13',
    'movie_url' => 'https://example.com/movies/interstellar.mp4',
]);

$movie3 = Movie::create([
    'title' => 'Parasite',
    'genre_id' => 2,
    'year' => 2019,
    'duration' => 132,
    'language' => 'Korean',
    'poster_url' => 'https://image.tmdb.org/t/p/original/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
    'description' => 'A dark comedy thriller on social inequality.',
    'trailer_url' => 'https://www.youtube.com/watch?v=5xH0HfJHsaY',
    'age_rating' => 'R',
    'movie_url' => 'https://example.com/movies/parasite.mp4',
]);

$movie4 = Movie::create([
    'title' => 'The Dark Knight',
    'genre_id' => 3,
    'year' => 2008,
    'duration' => 152,
    'language' => 'English',
    'poster_url' => 'https://image.tmdb.org/t/p/original/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
    'description' => 'Batman faces the Joker in Gotham City.',
    'trailer_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
    'age_rating' => 'PG-13',
    'movie_url' => 'https://example.com/movies/dark-knight.mp4',
]);

$movie5 = Movie::create([
    'title' => 'Spirited Away',
    'genre_id' => 4,
    'year' => 2001,
    'duration' => 125,
    'language' => 'Japanese',
    'poster_url' => 'https://image.tmdb.org/t/p/original/dL11DBPcRhWWnJcFXl9A07MrqTI.jpg',
    'description' => 'A fantasy adventure through a magical world.',
    'trailer_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk',
    'age_rating' => 'PG',
    'movie_url' => 'https://example.com/movies/spirited-away.mp4',
]);

    }
}