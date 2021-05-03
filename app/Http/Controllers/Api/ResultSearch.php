<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Apartment;

class ResultSearch extends Controller
{

    // mostra appartamenti citta
    public function cityApartment(Request $request) {

        // data input
        $data = $request->all();        
        $search_city = $data['city'];

        // // filtro appartamenti
        $apartments = DB::table('apartments')->where([
            ['city', 'LIKE', '%'. $search_city .'%']
        ])->get();
        
        return response()->json($apartments);
    }
}

