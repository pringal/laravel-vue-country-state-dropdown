<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\States;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function getCountries()
    {
        $data = Country::get();

        return response()->json($data);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function getStates(Request $request)
    {
        $data = States::where('country_id', $request->country_id)->get();

        return response()->json($data);
    }
}
