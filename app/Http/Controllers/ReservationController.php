<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::all();
        return view("reservation", ['reservation' => $reservations]);
    }

    public function edit(Reservation $reservations)
    {
            return view('reservation_edit', ['reservation' => $reservations]);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);

        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->party_size = $request->input('party_size');
        $reservation->user_id = $request->input('user_id');
        $reservation->table_id = $request->input('table_id');

        $reservation->save();

        return redirect('/reservation')->with('success', 'The reservation has been update.');
    }

    // public function add(Request $request)
    public function add()
    {
        return $this->edit(new Reservation(['id' => 0, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => '', 'table_id' => '']));
        // $reservation = new Reservation();

        // $reservation->date = $request->input('date');
        // $reservation->time = $request->input('time');
        // $reservation->party_size = $request->input('party_size');
        // $reservation->user_id = $request->input('user_id');
        // $reservation->table_id = $request->input('table_id');

        // $reservation->save();

        // return redirect('/reservation_edit')->with('success', 'The reservation has been added.');
    }

    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect('/reservation')->with('success', 'The reservation has been deleted.');
    }


}
