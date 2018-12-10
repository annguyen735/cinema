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
        $cinemaID = request()->input("id_cinema");
        
        $schedules;
        $arrRoomID = [];
        $roomIDs = Room::select("id")->where("cinema_id", $cinemaID)->get();
        foreach ($roomIDs as $roomID) {
            array_push($arrRoomID, $roomID->id);
        }
        $schedules = Schedule::where("film_id", $idFilm)->whereIn("room_id",$arrRoomID)->where("time_start", ">=", date("H:i"))->with("room")->get()->toArray();
        
        if (request()->ajax()) {
            return response()->json(["schedules" => $schedules]);
        }
    }
}
