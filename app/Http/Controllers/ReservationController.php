<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index() {

        $reservations = Reservation::all();
        return view("reservations.index", ["reservations"=> $reservations]);
    }

    public function create() {
        return view("reservations.create");
    }

    public function store(Request $request) {
        $data = $request->validate([
            'customer' => 'required|string|max:255',  
            'phone' => 'required|string|max:15',             
            'guests' => 'required|integer|min:1',      
            'datentime' => 'required|date', 
        ]);

        $newReservation = Reservation::create($data);

        return redirect()->route('reservation.index')->with('success','');
    }

    public function edit(Reservation $reservation) {
         return view('reservations.edit', ['reservation' => $reservation]);
    }

    public function update(Reservation $reservation, Request $request){
        $data = $request->validate([
            'customer' => 'required|string|max:255',  
            'phone' => 'required|string|max:15',             
            'guests' => 'required|integer|min:1',      
            'datentime' => 'required|date', 
        ]);

        $reservation->update($data);

        return redirect(route('reservation.index'))->with('success', 'Reservation Updated Succesffully');

    }

     public function destroy(Reservation $reservation){
        $reservation->delete();
        return redirect(route('reservation.index'))->with('success', 'Reservation deleted Succesffully');
    }
}
