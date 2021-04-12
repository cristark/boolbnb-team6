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

        foreach ($services as $service) {
            $newService = new Service();
            $newService->name = $service;
            $newService->visibility = false;

            $newService->save();
        }
    }
}