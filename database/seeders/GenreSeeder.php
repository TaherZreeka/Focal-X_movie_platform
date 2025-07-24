<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{

    public function run(): void
    {
        $genre1 = Genre::create([
               'name' => 'Action'
            ]);
        $genre2 = Genre::create([
                'name' => 'Drama'
            ]);
        $genre3 = Genre::create([
                'name' => 'Thriller'
            ]);
        $genre4 = Genre::create([
                'name' => 'Animation'
            ]);
        $genre5 = Genre::create([
                 'name' => 'Comedy'
            ]);
        $genre6 = Genre::create([
                 'name' => 'Horror'
            ]);
        $genre7 = Genre::create([
                  'name' => 'Science Fiction'
            ]);
        $genre8 = Genre::create([
               'name' => 'Romance'
            ]);
        $genre9= Genre::create([
                'name' => 'Documentary'
            ]);
    
    }
}
