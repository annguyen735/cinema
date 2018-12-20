<?php

namespace App\Http\Controllers\User;

use App\Models\Film;
use App\Models\Room;
use App\Models\Seat;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class BookTicketController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function booking($id)
    {
        $schedule = Schedule::where("id", $id)->first();
        // $arrKey = [
        //     'A' => 1,
        //     'B' => 2,
        //     'C' => 4,
        //     'D' => 5,
        //     'E' => 6,
        //     'F' => 7,
        //     'G' => 8,
        //     'H' => 9,
        //     'I' => 10,
        // ];
        $seats = Seat::where("room_id", $schedule->room_id)->where("status", 0)->get();
        $arrUnavailable = [];

        foreach($seats as $seat) {
            switch ($seat->y_seats) {
                case "B":
                    $nameSeat = 2 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                case "C":
                    $nameSeat = 4 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                case "D":
                    $nameSeat = 5 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                case "E":
                    $nameSeat = 6 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                case "F":
                    $nameSeat = 7 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                case "G":
                    $nameSeat = 8 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                case "H":
                    $nameSeat = 9 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break; 
                case "I":
                    $nameSeat = 10 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;
                default:
                    $nameSeat = 1 . "_".$seat->x_seats;
                    array_push($arrUnavailable, $nameSeat);
                    break;   
            }
        }
        $arrUnavailable = implode(",",$arrUnavailable);
        $film = Film::where("id", $schedule->film_id)->first();
        return view("frontend.booking.index", ["seatUnavailable" => $arrUnavailable, "film" => $film, "roomID" => $schedule->room_id ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBooking()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        $request = Input::all();

        return view('frontend.booking.payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
