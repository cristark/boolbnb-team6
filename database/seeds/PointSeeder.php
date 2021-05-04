<?php

use Illuminate\Database\Seeder;
use App\Point;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comuni = config('comuni');

        foreach ($comuni as $comune) {
            $newPoint = new Point();
            $newPoint->nome = $comune[0];
            $newPoint->codice = $comune[1];
            $newPoint->regione = $comune[2];
            $newPoint->provincia = $comune[3];
            $newPoint->codiceCatastale = $comune[4];
            $newPoint->cap = $comune[5];
            $newPoint->lat = $comune[6][0];
            $newPoint->lon = $comune[6][1];
           
            $newPoint->save();
        }
    }
}
