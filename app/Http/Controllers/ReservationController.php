<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;

/**
 * This class serves as the controller for managing reservations in the application.
 * It extends the base Controller class provided by Laravel.
 */
class ReservationController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $isLoggedIn = session('login');
        $user_id = session('user_id');
        if($isLoggedIn){
            $reservations = Reservation::where('user_id', $user_id)->get();
            return view('reservation', ['reservation' => $reservations]);
        }
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->edit(new Reservation(['id' => 0, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => '', 'table_id' => '']));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		return $this->update($request, 
						new Reservation(['id' => 0, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => '', 'table_id' => '']));
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
            return view('reservation_edit', ['reservation' => $reservation, 'tables' => Table::all()]);
        } else {
            $user = session('user_id');
            $reservation = new Reservation(['id' => null, 'date' => '', 'time' => '', 'party_size' => '', 'user_id' => $user, 'table_id' => '']);
            return view('reservation_add', ['reservation' => $reservation, 'tables' => Table::all()]);
        }
    }
    
    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $user = session('user_id');
        $reservation->date = $request->input('date');   
        $reservation->time = $request->input('time');
        $reservation->user_id = $user;
        $reservation->table_id = $request->input('table_id');
        var_dump($reservation->table_id);
        $row = Table::find($reservation->table_id);
        var_dump($row);
        $reservation->party_size = $row->party_size;
        $reservation->save();

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
