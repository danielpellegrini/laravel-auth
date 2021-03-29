<?php

use Illuminate\Database\Seeder;
use App\Guitar;
use Faker\Generator as Faker;

class GuitarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $items = new Guitar();
            $items->brand = $faker->name();
            $items->model = $faker->name();
            $items->type = $faker->name();
            $items->strings = $faker->rand(6, 26);
            $items->price = $faker->rand(10, 2000);
            $items->save();
        }
    }
}
