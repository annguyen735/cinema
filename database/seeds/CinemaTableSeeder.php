<?php

use App\Models\Cinema;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cityIds = DB::table('cities')->pluck('id')->toArray();
        $faker = Faker::create();
        for ($i = 0; $i <= 10; $i++) {
            factory(Cinema::class)->create([
                'city_id' => $faker->randomElement($cityIds),
            ]);
        }
    }
}
