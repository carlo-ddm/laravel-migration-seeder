<?php
use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <= 50; $i++){
            $new_train = new Train();
            $new_train->corporation = $faker->word();
            $new_train->departures = $faker->word();
            $new_train->arrivals = $faker->word();
            $new_train->departures_time = $faker->time();
            $new_train->arrivals_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(5, true);
            $new_train->train_carriages = $faker->numberBetween(1, 20);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            $new_train->save();
        }
    }
}
