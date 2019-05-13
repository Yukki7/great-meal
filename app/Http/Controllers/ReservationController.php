<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;

class ReservationController extends Controller
{
    public function reserve(Request $request) {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'email' => 'required|email',
            'datetime' => 'required',
            'message' => 'required',
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->datetime;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();

        Toastr::success('Reversation request sent successfully, we will confirm to you shortly', 'Success');
        return redirect()->back();
    }
}
