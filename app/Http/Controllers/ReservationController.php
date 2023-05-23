<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $reservations = Reservation::all();
        return view('reservation', ['reservation' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->edit(new Reservation(['id' => 0, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => '', 'table_id' => '']));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		return $this->update($request, 
						new Reservation(['id' => 0, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => '', 'table_id' => '']));
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        if ($reservation->id != 0) {
            $reservation = Reservation::find($reservation->id);
        } else {
            $reservation = new Reservation(['id' => null, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => '', 'table_id' => '']);
        }
        
        return view('reservation_edit', ['reservation' => $reservation]);
    }
    

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        // $reservation->user->name = $request->input('name');
        $reservation->date = $request->input('date');   
        $reservation->time = $request->input('time');
        $reservation->party_size = $request->input('party_size');
        $reservation->user_id = $request->input('user_id');
        $reservation->table_id = $request->input('table_id');
        $reservation->save();
        $reservation->user->save();


        return redirect('/reservation');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('/reservation');
    }


}
