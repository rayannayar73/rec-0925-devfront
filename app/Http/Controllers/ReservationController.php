<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function completeReservation()
    {
        return view('reservation.complete-reservation');
    }

    public function payment()
    {
        return view('reservation.payment');
    }
}