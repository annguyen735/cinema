<?php

namespace App\Http\Controllers\User;

use App\Models\Room;
use App\Models\Cinema;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idFilm = request()->input("id_film");
        $cityID = request()->input("id_city");
        
        $cinemas = Cinema::select('id')->where("city_id", $cityID)->get();
        $listSchedules = []; 
        foreach ($cinemas as $cinema) {
            $roomIDs = Room::select("id")->where("cinema_id", $cinema->id)->get();
            $arrRoomIDs = [];
            foreach ($roomIDs as $roomID) {
                array_push($arrRoomIDs, $roomID->id);
            }
            // \DB::connection()->enableQueryLog();
            $schedule = Schedule::where("film_id", $idFilm)->whereIn("room_id",$arrRoomIDs)->where("time_start", ">=", date("H:i"))->get()->toArray();
            // dd(\DB::getQueryLog());
           array_push($listSchedules, $schedule);
        }
        
        if (request()->ajax()) {
            return response()->json(["schedules" => $listSchedules]);
        }
    }
}
