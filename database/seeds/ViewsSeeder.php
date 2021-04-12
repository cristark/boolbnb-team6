<?php

use Illuminate\Database\Seeder;
//test
use Faker\Generator as Faker;
use App\View;
use App\Apartment;

class ViewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //test
        for ($i=0; $i < 10; $i++) { 
            $newView = new View();
            $conteggioViews = Count(Apartment::all()->toArray());
            $newView->apartment_id = rand(1, $conteggioViews);
            $newView->date = $faker->dateTime();
            $newView->save();
        }
    }
}