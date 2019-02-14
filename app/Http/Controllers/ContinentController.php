<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContinentController extends Controller
{
    //
    public function Europe()
    {
        $query = "
            SELECT *
            FROM `country`
            WHERE `Continent` = ?
        ";
        $countries = DB::select($query, ['Europe']);

        // $countries is an array of stdClass objects

        $coutries_view = view('continents/countries', [
            'countries' => $countries
        ]);

        return $coutries_view;
    }
}
