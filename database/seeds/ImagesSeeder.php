<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\Apartment;
use Faker\Generator as Faker;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_image = new Image();
        
            $conteggioImages = Count(Apartment::all()->toArray());
            $new_image->apartment_id = rand(1, $conteggioImages);

            $new_image->src = $faker->imageUrl(640, 480, 'animals', true);
            $new_image->img_description = $faker->text(15);
        
            $new_image->save();
        }
    }
}
