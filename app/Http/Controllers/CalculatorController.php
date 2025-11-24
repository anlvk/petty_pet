<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class CalculatorController extends Controller
{
    //
    public function bathroomUpgrade(Request $request) {
        print_r($result);
    }

    public function bathroomDowngrade(Request $request) {
        print_r($result);
    }

    /**
     * 
     */
    public function bathroomAction(Request $request) {
        $action = $request->input('action');

        // Variable value type casting
        $result = (int) (Session::get('bathroomActionResult')) ?? 0;

        $result2 = (($action == '+') ? ($result += 1) : (($result > 0) ? ($result -= 1) : 0));

        Session::put('bathroomActionResult', $result2);

        return back();
    }


    public function roomAction(Request $request) {
        $action = $request->input('action');
        $result = (int) (Session::get('roomActionResult')) ?? 0;
        $result2 = (($action == '+') ? ($result += 1) : (($result > 0) ? ($result -= 1) : 0));
        Session::put('roomActionResult', $result2);
        return back();
    }
}
