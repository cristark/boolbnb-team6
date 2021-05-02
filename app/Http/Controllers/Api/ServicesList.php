<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service;

class ServicesList extends Controller
{
    public function serviziLista() {
        $services = Service::all();

        $data = [
            'services' => $services
        ];

        return response()->json($data);
    }
}
