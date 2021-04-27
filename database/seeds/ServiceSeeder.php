<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ['wi-fi', 'posto auto', 'piscina', 'portineria', 'sauna', 'vista mare'];

        $links = [
            '<i class="fas fa-wifi"></i>', 
            '<i class="fas fa-parking"></i>', 
            '<i class="fas fa-swimming-pool"></i>', 
            '<i class="fas fa-concierge-bell"></i>', 
            '<i class="fas fa-cloud"></i>', 
            '<i class="fas fa-water"></i>'
        ];

        foreach ($services as $key => $service) {
            $newService = new Service();
            $newService->name = $service;
            $newService->image_link = $links[$key];
            $newService->visibility = false;

            $newService->save();
        }
    }
}