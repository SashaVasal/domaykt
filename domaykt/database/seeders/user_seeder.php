<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->login = "user@mail.ru";
        $user->password = Hash::make("user");
        $user->role = 0;
        $user->phone = "79000000000";
        $user->firstname = "user";
        $user->lastname = "user";
        $user->save();
    }
}
