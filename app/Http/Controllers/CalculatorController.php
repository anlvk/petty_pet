<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class CalculatorController extends Controller
{

    /**
     * 
     */
    public function bathroomAction(Request $request) {
        $action = $request->input('action');
        // Variable value type casting
        $result = (int) (Session::get('bathroomActionResult')) ?? 0;
        // Calculating final result value
        $result2 = (($action == '+') ? ($result += 1) : (($result > 0) ? ($result -= 1) : 0));
        // Setting final result into Session
        Session::put('bathroomActionResult', $result2);

        return back();
    }


    /**
     * 
     */
    public function roomAction(Request $request) {
        $action = $request->input('action');
        // Variable value type casting
        $result = (int) (Session::get('roomActionResult')) ?? 0;
        // Calculating final result value
        $result2 = (($action == '+') ? ($result += 1) : (($result > 0) ? ($result -= 1) : 0));
        // Setting final result into Session
        Session::put('roomActionResult', $result2);
        return back();
    }
}
