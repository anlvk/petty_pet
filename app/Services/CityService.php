<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class CityService {
    public function __construct(protected integer $cityID) {
        session(['city' => $cityID]);
    }
}
