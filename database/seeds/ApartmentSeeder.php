<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
    public function run(Faker $faker, User $users)
    {
        for($i = 0; $i < 10; $i++){
            $newApartment = new Apartment();
            $users = Count(User::all()->toArray());
            //dave parto da 0 fino al totale di User:all e ripasso come valore id
            $newApartment->user_id = rand(1, $users);
            // $newApartment->user_id = $users[rand(0, Count($users)-1)]["id"];
            
            $newApartment->title = $faker->sentence(5);

            $slug = Str::slug($newApartment->title);
            $slugIniziale = $slug;
            $apartmentPresente = Apartment::where('slug', $slug)->first();
            $contatore = 1;
            while ($apartmentPresente) {
                $slug = $slugIniziale . '-' . $contatore;
                $apartmentPresente = Apartment::where('slug', $slug)->first();
                $contatore++;
            }
            $newApartment->slug = $slug;

            $newApartment->num_rooms = $faker->randomDigit();
            $newApartment->num_beds = $faker->numberBetween(1, 8);
            $newApartment->num_baths = $faker->numberBetween(1,6);
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
