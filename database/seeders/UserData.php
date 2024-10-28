<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            "name"=> "zxc",
            "email"=> "zxc@zxc.com",
            "password"=> bcrypt("11223344"),
            "role"=> "admin"

        ]);
        User::create([
            "name"=> "zxc1",
            "email"=> "zxc1@zxc.com",
            "password"=> bcrypt("11223344"),
            "role"=> "user"

        ]);
    }
}
