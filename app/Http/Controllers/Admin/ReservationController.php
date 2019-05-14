<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact('reservations'));
    }
}
