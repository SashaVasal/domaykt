<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class house_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            $house = new House();
            $house->status_object = 1;
            $house->image = "tF8YBFOdDjN8oRt3oskqWFrRZFBnGk5sRFt1b4g9.jpg";
            $house->address = 'Строда 20';
            $house->start_date = "2022-09-01";
            $house->end_date = "2022-09-10";
            $house->longitude = rand(100,800)/10;
            $house->latitude = rand(100,800)/10;
            $house->floors = random_int(1,8);
            $house->entrance = random_int(1,8);
            $house->is_floor = true;
            $house->save();
        }
    }
}
