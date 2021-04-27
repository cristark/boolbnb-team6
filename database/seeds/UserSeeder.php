<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                '1',
                'Davide',
                'davide@gmail.com',
                'ciaociao',
                'Corsini',
                '1995-12-10',
                'https://media-exp1.licdn.com/dms/image/C4D03AQE3zs_pA5Bsfg/profile-displayphoto-shrink_200_200/0/1617388726596?e=1623888000&v=beta&t=J6UGxuv4Jq8LlvuP_ozHBR1c4BRyfrgfVwQtS2YkKJ4'
            ],
            [
                '2',
                'Cristiano',
                'cristiano@gmail.com',
                'willyboyz',
                'Tarconi',
                '1989-09-26',
                'https://instagram.ffco3-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/91781221_228731938324688_2866777644389947180_n.jpg?tp=1&_nc_ht=instagram.ffco3-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=pG0DMI20vLEAX_JxUpZ&edm=AP_V10EBAAAA&ccb=7-4&oh=a790214b30712d3d04907d004d1b5d0f&oe=60ADA193&_nc_sid=4f375e'
            ],
            [
                '3',
                'Ulisse',
                'ulisse@gmail.com',
                'ciaociao',
                'Fontanot',
                '1999-03-12',
                'https://instagram.ffco3-1.fna.fbcdn.net/v/t51.2885-15/e35/119480162_679163946341914_6973841143726070323_n.jpg?tp=1&_nc_ht=instagram.ffco3-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=Fx_UuXVyxJgAX-wtUdd&edm=AP_V10EBAAAA&ccb=7-4&oh=45ce315d34b0a71d15e1622e8cf5c65e&oe=60AECA52&_nc_sid=4f375e'
            ],
            [
                '4',
                'Daniel',
                'daniel@gmail.com',
                'ciaociao',
                'Taddeo',
                '1997-11-27',
                'https://instagram.ffco3-1.fna.fbcdn.net/v/t51.2885-19/s320x320/53419787_1995038477459141_8911314951671382016_n.jpg?tp=1&_nc_ht=instagram.ffco3-1.fna.fbcdn.net&_nc_ohc=WQwA3ZFghtgAX9sevBA&edm=ABfd0MgBAAAA&ccb=7-4&oh=9e6ca4bf774de330561a0abbec0f6fd5&oe=60AD3724&_nc_sid=7bff83'
            ]
            // [
            //     '1',
            //     'Davide',
            //     'davide@gmail.com',
            //     'ciaociao',
                            // '$2y$10$VKarvXw4bXCZK.rJ5khxQe4TakvYIUGC.45oUCoDmRFGvGfVhjtKe',

            //     'Corsini',
            //     '',
            //     'https://media-exp1.licdn.com/dms/image/C4D03AQE3zs_pA5Bsfg/profile-displayphoto-shrink_200_200/0/1617388726596?e=1623888000&v=beta&t=J6UGxuv4Jq8LlvuP_ozHBR1c4BRyfrgfVwQtS2YkKJ4'
            // ],
            // [
            //     '1',
            //     'Davide',
            //     'davide@gmail.com',
            //     'ciaociao',
            //     'Corsini',
            //     '20-12-95',
            //     'https://media-exp1.licdn.com/dms/image/C4D03AQE3zs_pA5Bsfg/profile-displayphoto-shrink_200_200/0/1617388726596?e=1623888000&v=beta&t=J6UGxuv4Jq8LlvuP_ozHBR1c4BRyfrgfVwQtS2YkKJ4'
            // ],
            // [
            //     '1',
            //     'Davide',
            //     'davide@gmail.com',
            //     'ciaociao',
            //     'Corsini',
            //     '20-12-95',
            //     'https://media-exp1.licdn.com/dms/image/C4D03AQE3zs_pA5Bsfg/profile-displayphoto-shrink_200_200/0/1617388726596?e=1623888000&v=beta&t=J6UGxuv4Jq8LlvuP_ozHBR1c4BRyfrgfVwQtS2YkKJ4'
            // ]
        ];


        foreach($users as $user){
            $newUser = new User();
            $newUser->id = $user[0];
            $newUser->name = $user[1];
            $newUser->email = $user[2];
            $newUser->password = bcrypt($user[3]);
            $newUser->lastname = $user[4];
            $newUser->birth_date = $user[5];
            $newUser->user_img = $user[6];

            $newUser->save();
        }
    }
}
