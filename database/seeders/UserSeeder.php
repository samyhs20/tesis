<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Samantha', 'email' => 'samy.hands99@hotmail.com', 'password' => ('password'), 'cedula'=>'1725314445', 'rol'=>'admin']);
    }
}
