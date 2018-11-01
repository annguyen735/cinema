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
            for ($j = 65; $j < 74; $j++) {
                for ($i = 1; $i <= 10; $i++) {
                     $arr = [1,2,9,10];
                    if ($j == 73 && in_array($i, $arr)) {
                        continue;
                    }
                    factory(Seat::class)->create([
                        'room_id' => $roomIds[$k],
                        'x_seats' => $i,
                        'y_seats' => chr($j),
                        'status' => 1
                    ]);
                }
            }
        }
    }
}
