<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\Sponsor;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        $sponsors = Sponsor::all();
        $services = Service::all();

        $data = [
            'apartments' => $apartments,
            'sponsors' => $sponsors,
            'services' => $services
        ];

        return view('admin.apartment.index', $data);
    }
}
