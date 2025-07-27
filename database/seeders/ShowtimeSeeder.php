<?php

namespace Database\Seeders;

use App\Enums\ShowTypeEnum;
use App\Models\Showtime;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ShowtimeSeeder extends Seeder
{
   
    public function run(): void
    {
         $showtime1 = Showtime::create([
                'movie_id' => 1,
<<<<<<< HEAD
                'date' => '2025-07-22',
=======
                'date' => Carbon::now()->addDays(1),
>>>>>>> origin/raghad
                'time' => '10:00',
                'hall' => 'Hall A',
                'price' => 30.00,
                'show_type' => ShowTypeEnum::Morning,
        ]);
           $showtime2 = Showtime::create([
                 'movie_id' => 1,
<<<<<<< HEAD
                'date' => '2025-07-10',
=======
                'date' => Carbon::now()->addDays(2),
>>>>>>> origin/raghad
                'time' => '18:00',
                'hall' => 'Hall B',
                'price' => 50.00,
                'show_type' => ShowTypeEnum::Evening,
        ]);
             $showtime3= Showtime::create([
                'movie_id' => 2,
<<<<<<< HEAD
                'date' => '2025-07-12',
=======
                'date' => Carbon::now()->addDays(3),
>>>>>>> origin/raghad
                'time' => '20:00',
                'hall' => 'VIP Lounge',
                'price' => 100.00,
                'show_type' => ShowTypeEnum::Vip,
        ]);
             $showtime4 = Showtime::create([
                'movie_id' => 2,
<<<<<<< HEAD
                'date' => '2025-07-20',
=======
                'date' => Carbon::now()->addDays(4),
>>>>>>> origin/raghad
                'time' => '14:00',
                'hall' => 'Hall C',
                'price' => 40.00,
                'show_type' => ShowTypeEnum::Weekend,
        ]);
             $showtime5 = Showtime::create([
                 'movie_id' => 3,
<<<<<<< HEAD
                'date' => '2025-07-27',
=======
                'date' => Carbon::now()->addDays(5),
>>>>>>> origin/raghad
                'time' => '16:30',
                'hall' => 'Hall A',
                'price' => 45.00,
                'show_type' => ShowTypeEnum::Evening,
        ]);
             $showtime6 = Showtime::create([
                'movie_id' => 4,
                'date' => '2025-07-25',
                'time' => '19:00',
                'hall' => 'Main Hall',
                'price' => 50.00,
                'show_type' => ShowTypeEnum::Evening,
        ]);

}
}
