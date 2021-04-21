<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();


        // $city = $data['city'];
        // $lat = $data['latitude'];
        // $lng = $data['longitude'];
        // $now = Carbon::now();

        // //chiamata al database con calcolo radius
        // $db = DB::table('apartments')->get();
        // $apartment = DB::table('apartments')
        // ->select("*"
        //     ,DB::raw("6371 * acos(cos(radians(" . $lat . ")) 
        //     * cos(radians(apartments.lat)) 
        //     * cos(radians(apartments.long) - radians(" . $lng . ")) 
        //     + sin(radians(" .$lat. ")) 
        //     * sin(radians(apartments.lat))) AS distance"))
        //     ->having("distance", "<=", 20)
        //     ->join('flat_addresses', 'apartments.id', '=', 'flat_addresses.flat_id')
        //     ->where('flat_addresses.city', 'LIKE', '%'.$city.'%')
        //     ->where('hidden', '=', 0)
        //     ->where('promo_service_id', '=', null)
        //     ->orWhere('end', '<=', $now)
        //     ->get();


            $result  = [
                'apartments' => $apartments
            ];

            return response()->json($result);
    }
}
