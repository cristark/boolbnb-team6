<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Service;
use App\Apartment;
use App\point;

class ResultSearchAdvanced extends Controller
{
    // filtro avanzato
    public function filter(Request $request) {

        // data input
        $data = $request->all();
        $services = Service::all();
        $search_city = $data['city'];
        $data['radius'] = intval($data['radius']);

        // $point_lat = 45.468484857287265;
        // $point_lon = 9.175598667129714;
        
        // puint center city
        $point = Point::where('nome','=',$search_city)->get()[0];
        $point_lat = $point['lat'];
        $point_lon = $point['lon'];
        
        // array appartamenti ok
        $apartment_ok = [];
        $apartment_pass1 = null;
        $apartment_dist = [];


        // filtro appartamenti
        $apartments = DB::table('apartments')->where([
            ['city', 'LIKE', '%'. $search_city .'%'],
            ['num_beds', '>=', $data['num_beds']],
            ['num_rooms', '>=', $data['num_rooms']],
            ['num_baths', '>=', $data['num_baths']],
            ['mq','>=', $data['num_mq']],
            ['active', 1]
        ])->get();
        
        // filtra appartamenti
        foreach ($apartments as $apartment) {
            
            // test servizi presenti richiesti
            $apartment_pass1 = [];
            
            // se ha selezionato servizi check
            if(isset($data['services'])){
            
                // ottieni id appartamento
                $id_apartment = $apartment->id;

                // ottieni tutti i servizi dell'appartamento
                $servizi_apartment = DB::table('apartment_service')->where([
                    ['apartment_id', '=', $id_apartment]
                ])->get();

                // conteggio servizi trovati
                $trovati = 0;

                // ottieni valori servizi selezionati
                $data['services'] = array_values($data['services']);

                // cerca servizi corrispodenti
                foreach ($servizi_apartment as $service) {
                    if (in_array($service->service_id, $data['services'])) {
                        $trovati++;
                    }
                }

                 // controlla servizi presenti
                if( $trovati == count($data['services']) ){
                    $apartment_pass1 = $apartment;
                }

            } else {
                $apartment_pass1 = $apartment;
            }

            // controlla se ha superato ckeck precedente
            if( $apartment_pass1 != null ){
                
                // constante terra
                $earth_radius = 6371;

                // differenza posizioni
                $dLat = deg2rad($point_lat - $apartment->latitude);  
                $dLon = deg2rad($point_lon - $apartment->longitude);  
                
                // termini calcolo
                $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($apartment->latitude)) * cos(deg2rad($point_lat)) * sin($dLon/2) * sin($dLon/2);  
                $c = 2 * asin(sqrt($a));  

                // calcolo distanza
                $distance = $earth_radius * $c; 

                // check distanza;
                // var_dump($data['radius']);
                
                // checkdistanza
                if($distance <= $data['radius']){
                    array_push($apartment_dist, $distance);
                    array_push($apartment_ok, $apartment);
                }
            }

        }
                
        return response()->json($apartment_ok);
    }
}

