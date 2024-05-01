<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {

        $user = [
            ['name'  => 'Admin','email' => 'admin@wordswithwings.com','password' =>bcrypt('adminpswd@123')]
        ];

        User::insert($user);
    }
}
