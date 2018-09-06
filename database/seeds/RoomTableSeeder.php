<?php

use App\Models\Room;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cinemaIds = DB::table('cinemas')->pluck('id')->toArray();
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            factory(Room::class)->create([
                'cinema_id' => $faker->randomElement($cinemaIds),
            ]);
        }
    }
}
