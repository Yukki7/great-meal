<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Category;
use App\Item;
use App\Contact;
use App\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
        $sliderCount = Slider::count();
        $categoryCount = Category::count();
        $itemCount = Item::count();
        $contactCount = Contact::count();

        $reservations = Reservation::all();
        $reservPerMonth = array_fill(0, 12, 0);
        foreach ($reservations as $key => $reserv) {
            $reservPerMonth[substr($reserv->date_and_time, 3, 2) - 1]++;
        }

        $reservationFalse = Reservation::where('status', false)->get();

        return view('admin.dashboard', compact('sliderCount', 'categoryCount', 'itemCount', 'reservationFalse', 'reservPerMonth', 'contactCount'));
    }
}
