<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Seat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::with('room');
        if (request()->has('room_id') && request()->room_id != '') {
            $seats = $seats->where('room_id', request()->room_id);
        }
        $seats = $seats->orderBy('id', 'DESC')->paginate(10);
        return view('backend.seats.index', [
            'seats' => $seats,
            'rooms' => Room::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seats.create', ['rooms' => Room::orderBy('id', 'DESC')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seat = Seat::where('x_seats', $request->x_seats)
                    ->where('y_seats', $request->y_seats)
                    ->where('room_id', $request->room_id)
                    ->first();

        if (empty($seat)) {
            $result = Seat::create([
                'x_seats' => $request->x_seats,
                'y_seats' => $request->y_seats,
                'room_id' => $request->room_id,
                'status' => 1
            ]);
            if ($result) {
                $check = 1;
                return redirect()->route('seats.index', compact('check'));
            }
        } else {
            $result = $seat->update([
                'deleted_at' => null,
                'status' => 1
            ]);
            if ($result) {
                $check = 1;
                return redirect()->route('seats.index', compact('check'));
            }
        }
        $check = 0;
        return redirect()->route('seats.create', compact('check'));
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
        return view('backend.seats.update', [
            'seat' => Seat::findOrFail($id),
            'rooms' => Room::orderBy('id', 'DESC')->get()
        ]);
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
        try{
            $seat = Seat::where('x_seats', $request->x_seats)
                    ->where('y_seats', $request->y_seats)
                    ->where('room_id', $request->room_id)
                    ->first();
            if (!empty($seat)) {
                $check = 0;
                return redirect()->route('seats.index', compact('check'));
            } else {
                $seat = Seat::findOrFail($id);
                $result = $seat->update([
                    'x_seats' => $request->x_seats,
                    'y_seats' => $request->y_seats,
                    'room_id' => $request->room_id,
                    'status'  => $request->status
                ]);
                if ($result) {
                    $check = 2;
                    return redirect()->route('seats.index', compact('check'));
                }
            }
            
        } catch (QueryException $e) {
            $check = 0;
            return redirect()->route('seats.index', compact('check'));
        } catch (Exception $e) {
            $check = 0;
            return redirect()->route('seats.index', compact('check'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if (Seat::findOrFail($id)->delete()) {
                $check = 3;
                return redirect()->route('seats.index', compact('check'));    
            }
            $check = 0;
            return redirect()->route('seats.index', compact('check'));
        } catch (QueryException $e) {
            $check = 0;
            return redirect()->route('seats.update', compact('check'));
        } catch (Exception $e) {
            $check = 0;
            return redirect()->route('seats.update', compact('check'));
        }
    }
}
