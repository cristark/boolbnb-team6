<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\View;
use App\Apartment;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $newView = new View();
            $conteggioViews = Count(Apartment::all()->toArray());
            $newView->apartment_id = rand(1, $conteggioViews);
            $newView->date = $faker->dateTime();
            $newView->save();
        } 
    }
}
