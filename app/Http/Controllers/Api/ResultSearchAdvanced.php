<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Service;
use App\Apartment;

class ResultSearchAdvanced extends Controller
{
    // filtro avanzato
    public function filter(Request $request) {

        // data input
        $data = $request->all();
        $services = Service::all();
        
        $search_city = $data['city'];

        // array appartamenti ok
        $apartment_ok = [];

        // filtro appartamenti
        $apartments = DB::table('apartments')->where([
            ['city', 'LIKE', '%'. $search_city .'%'],
            ['num_beds', '>=', $data['num_beds']],
            ['num_rooms', '>=', $data['num_rooms']],
            ['num_baths', '>=', $data['num_baths']],
            ['mq','>=', $data['num_mq']],
            ['active', 0]
        ])->get();
        
        // filtra appartamenti
        foreach ($apartments as $apartment) {
            
            // ottieni id appartamento
            $id_apartment = $apartment->id;

            // se ha selezionato servizi
            if(isset($data['checkedServices'])){

                // ottieni tutti i servizi dell'appartamento
                $servizi_apartment = DB::table('apartment_service')->where([
                    ['apartment_id', '=', $id_apartment]
                ])->get();

                // conteggio servizi trovati
                $trovati = 0;

                // cerca servizi corrispodenti
                foreach ($servizi_apartment as $service) {
                    if (in_array($service->service_id, $data['checkedServices'])) {
                        $trovati++;
                    }
                }

                if( $trovati == count($data['checkedServices']) ){
                    array_push($apartment_ok, $apartment);
                }
            }


        }

        if(!isset($data['checkedServices'])){
            $apartment_ok = $apartments;
        }
                
        return response()->json($apartment_ok);
    }
}

