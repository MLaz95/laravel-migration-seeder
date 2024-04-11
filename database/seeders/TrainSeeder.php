<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for($i = 0; $i < 10; $i++){

            $newTrain = new Train();
            $newTrain->company = $faker->words(3, true);
            $newTrain->departure_station = 'Stazione di ' . $faker->word();
            $newTrain->arrival_station = 'Stazione di ' . $faker->word();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->departure_time = $faker->time('H:i');
            $newTrain->arrival_time = $faker->time('H:i');
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->number_cars = $faker->numberBetween(4, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
    
            $newTrain->save();
        }
    }
}
