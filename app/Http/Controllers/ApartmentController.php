<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Apartment;


class ApartmentController extends Controller
{
        public function index(){

            $apartments = Apartment::all();

            $data = [
                'apartments' => $apartments
            ];

        return view('guest.apartment.index', $data);
        }

        public function show($slug) {

            $apartment = Apartment::where('slug', $slug)->firstOrFail();
            $apartment_selected = $apartment->id;
            $data = [
                'apartment' => $apartment
            ];

            
            return view('guest.apartment.show', $data)->with('apartment_selected', $apartment_selected);
        }

        
}
