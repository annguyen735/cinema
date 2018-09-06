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
        $cityIDs = [2, 3, 4, 5, 6];
        $cinemaIds = DB::table('cinemas')->whereIn("city_id", $cityIDs)->pluck('id')->toArray();
        $j = 0;
        for ($i = 1; $i <= 30; $i++) {
            $k = $i%6; 
            if ($k == 0 && $i != 30) {
                $j++;
                $k++;
            } 
            factory(Room::class)->create([
                'cinema_id' => $cinemaIds[$j],
                "name" => "Room " . $k
            ]);
        }
    }
}
