<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory()
        $user = new User();
        $user->login = "admin@mail.ru";
        $user->password = Hash::make("admin");
        $user->role = 1;
        $user->phone = "79000000000";
        $user->firstname = "admin";
        $user->lastname = "admin";
        $user->save();
    }
}
