<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Apartment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\View;


class ApartmentController extends Controller
{
        public function index(){

            $apartments = Apartment::all();

            $data = [
                'apartments' => $apartments
            ];

        return view('guest.apartment.index', $data);
        }

        public function show( $slug ) {


            // $ip = Request()->ip();
            $apartment = Apartment::where('slug', $slug)->firstOrFail();
            $apartment_selected = $apartment->id;
            
            // dd(Auth::user());
            if( !Auth::user() || Auth::user()->id != $apartment->user_id)
            {
                    
                    $apartment->addView();
                    // $visita = new View();                    
                    // $visita->ip_address = Request()->ip();

                    // $apartment->views()->save( $visita );                   
            }

            $data = [
                'apartment' => $apartment
            ];

            
            return view('guest.apartment.show', $data)->with('apartment_selected', $apartment_selected);
        }

        //inizio test search
        public function search()
        {
            $search_text = $_GET['query'];
            $apartments = Apartment::where('city','LIKE','%'. $search_text .'%')->get();
            // $data = [
            //     'apartments' => $apartments
            // ];
            return view('guest.apartment.search', compact('apartments'));
            // return view('guest.apartment.search', $data);

        }

        public function homeSearch()
        {
            $search_text = $_GET['city'];
            $apartments = Apartment::where('city','LIKE','%'. $search_text .'%')->get();
            // $data = [
            //     'apartments' => $apartments
            // ];
            return view('guest.apartment.search', compact('apartments'));
            // return view('guest.apartment.search', $data);

        }
        //fine test search
}
