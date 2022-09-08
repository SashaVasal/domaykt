<?php

namespace Database\Seeders;

use App\Models\Status_object;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class houses_status_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status_object = new Status_object();
        $status_object->name = "Готов";
        $status_object->save();

        $status_object = new Status_object();
        $status_object->name = "Не готов";
        $status_object->save();
    }
}
