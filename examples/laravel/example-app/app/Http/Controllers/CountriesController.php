<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CountriesController extends Controller
{
    public function name (Request $request, string $name)
    {
        // Step 4: Test path parameter
        // return response()->json($name);

        // $json = Storage::disk('local')->get('countries.json');
        // $countries = json_decode($json);
        $countries = [
            'Argentinien', 'Belgien', 'China', 'Deutschland',
            'England', 'Frankreich', 'Ghana', 'Holland'
        ];

        // Step 5: Filter countries by name
        $filteredCountries = array_filter(
            $countries,
            function ($country) use ($name) {
                return str_contains($country, $name);
            }
        );

        // Step 1: Return data as JSON
        // return response()->json($countries);

        // Step 2: Render view
        // return view('countries_by_name');

        // Step 3: Render data in view
        // return view('countries_by_name', ['countries' => $countries]);

        // Step 6: Render filtered data in view
        return view('countries_by_name', ['countries' => $filteredCountries]);
    }
}
