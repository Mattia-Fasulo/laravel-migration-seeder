<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->bothify('????-#####');
            $newTrain->number_carriages = $faker->randomDigitNot(0);
            $newTrain->in_time = $faker->boolean();
            if ($i <= 5) {
                $newTrain->date = today()->toDateString();
            } else {
                $newTrain->date = $faker->dateTimeBetween('now', '+2 week');
            }
            $newTrain->save();
        }
    }
}

