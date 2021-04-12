<?php

use Illuminate\Database\Seeder;
//ModelsBlade:
use App\Apartment;
use App\User;
use App\Message;
use App\Service;
use App\View;
use App\Sponsor;
use App\Image;
//Faker
use Faker\Generator as Faker;


class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newApartment = new Apartment();
            $newApartment->user_id = 1;

            $newApartment->title = $faker->sentence(5);
            $newApartment->num_rooms = $faker->randomDigit();
            $newApartment->num_beds = $faker->numberBetween(0, 8);
            $newApartment->num_baths = $faker->numberBetween(0,6);
            $newApartment->mq = $faker->numberBetween(45, 500);
            $newApartment->city = $faker->city();
            $newApartment->province = $faker->country();
            $newApartment->state = $faker->state();
            $newApartment->latitude = $faker->latitude($min = -90, $max = 90);
            $newApartment->longitude = $faker->longitude($min = -180, $max = 180);
            $newApartment->description = $faker->paragraph();
            $newApartment->main_img = $faker->imageUrl(640, 480, 'animals', true);
            $newApartment->price = $faker->numberBetween(45, 2500);
            $newApartment->active = true;
            
            //save
            $newApartment->save();
            
        }
    }
}
