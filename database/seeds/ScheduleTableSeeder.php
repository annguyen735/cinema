<?php

use App\Models\Schedule;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time_start = ['8:30', '10:45', '13:30', '15:45', '17:30', '19:45', '21:30'];
        $time_finish = ['10:30', '12:45', '15:30', '17:45', '19:30', '21:45', '23:30'];

        $roomIds = DB::table('rooms')->pluck('id')->toArray();
        $filmIds = DB::table('films')->pluck('id')->toArray();

        $faker = Faker::create();
        $j = 0;
        for ($i = 0; $i <= 20; $i++) {
            if ($j >= 7) {
                $j = 0;
            }
            factory(Schedule::class)->create([
                'room_id' => $faker->randomElement($roomIds),
                'film_id' => $faker->randomElement($filmIds),
                'time_start' => $time_start[$j],
                'time_finish' => $time_finish[$j],
            ]);
                $j++;
        }
    }
}
