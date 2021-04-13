<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
