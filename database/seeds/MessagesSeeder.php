<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\Apartment;
use Faker\Generator as Faker;


class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //$apartments = Apartment::all();

        for ($i=0; $i < 10; $i++) {

            $new_message = new Message();
            
            
            $new_message->sender_name = $faker->name;
            $new_message->sender_mail = $faker->email;
            $new_message->msg_txt = $faker->text(200);
            $new_message->status = $faker->boolean(false);

            $new_message->save();
        }
    }
}
            
