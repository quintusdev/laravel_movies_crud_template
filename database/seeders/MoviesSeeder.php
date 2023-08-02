<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 6; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->word();
            $newMovie->image = $faker->imageUrl(640, 480, 'movies', true);;
            $newMovie->description = $faker->paragraph();
            $newMovie->director = $faker->word();
            $newMovie->votes = $faker->numberBetween(1, 5);;
            $newMovie->exit_date = $faker->dateTime();

            $newMovie->save();
        }
    }
}
