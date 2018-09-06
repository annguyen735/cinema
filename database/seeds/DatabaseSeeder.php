<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CinemaTableSeeder::class);
        $this->call(FilmTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(SeatTableSeeder::class);
        $this->call(UpdateSeatsAvailableRoomTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
        $this->call(BorrowingTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(DetailBookingFilmTableSeeder::class);
        $this->call(FavoriteTableSeeder::class);
    }
}
