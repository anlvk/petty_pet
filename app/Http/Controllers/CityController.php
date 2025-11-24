<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function __construct(protected CityService $cityService) {}

    public function selectCity($cityID) {
        if(in_array($cityID, array_keys(config('app.available_cities')))) {
            $this->cityService($cityID);
        }

        return back();
    }
}
