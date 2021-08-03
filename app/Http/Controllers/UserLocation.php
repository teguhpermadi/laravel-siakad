<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserLocation extends Controller
{
    public function index(Request $request)
    {
        // $ip = $request->ip(); // Dynamic IP address
        $ip = '36.82.8.167'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        return view('pages.home.location', compact('currentUserInfo'));
    }
}
