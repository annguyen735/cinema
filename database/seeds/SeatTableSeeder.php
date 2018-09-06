<?php

use App\Models\Seat;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomIds = DB::table('rooms')->pluck('id')->toArray();
        for ($k = 0; $k < count($roomIds); $k++) {
            for ($j = 65; $j <= 75; $j++) {
                for ($i = 1; $i <= 15; $i++) {
                    factory(Seat::class)->create([
                        'room_id' => $roomIds[$k],
                        'x_seats' => $i,
                        'y_seats' => chr($j),
                        'status' => rand(0,1)
                    ]);
                }
            }
        }
    }
}
