<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    //
    public function show(Request $request) {
        $appointments = Appointment::all();

        return view('appointment')->with('appointments', $appointments);
    }

    public function create(Request $request) {
        $notes = $request->appointment_notes;
        $slot = $request->select_slot;

        var_dump($notes);

        return back();
    }

    public function book() {

    }
}
