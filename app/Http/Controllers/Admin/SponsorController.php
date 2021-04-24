<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Sponsor;
use App\Service;

class SponsorController extends Controller
{
    public function index($slug)
    {

        // $apartments = Apartment::all();
        // $idUser = Auth::id();
        $apartment = Apartment::where('slug', $slug)->firstOrFail();
        // dd($apartment);
        // dd($apartment->sponsors()); 
        // dd($apartment_sponsor) ;
        $sponsors = Sponsor::all();

        $data = [
            'apartment' => $apartment,
            'sponsors' => $sponsors
        ];

        return view('admin.sponsor.index', $data);
    }
}
