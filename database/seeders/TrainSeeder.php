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
            $newTrain->Azienda = $faker->words(3, true);
            $newTrain->Stazione_partenza = 'Stazione di ' . $faker->word();
            $newTrain->Stazione_arrivo = 'Stazione di ' . $faker->word();
            $newTrain->Data_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->Orario_partenza = $faker->time('H:i');
            $newTrain->Orario_arrivo = $faker->time('H:i');
            $newTrain->Codice_Treno = $faker->randomNumber(4, true);
            $newTrain->Numero_Carrozze = $faker->numberBetween(4, 12);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
    
            $newTrain->save();
        }
    }
}
