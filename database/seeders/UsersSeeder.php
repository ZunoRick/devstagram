<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Eddard Stark',
            'username' =>'ned-stark',
            'email' => 'eddard@stark.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Jhon Snow',
            'username' =>'j-snow',
            'email' => 'jhon@stark.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Tywin Lannister',
            'username' =>'Tywin',
            'email' => 'tywin@lannister.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'ReactDev',
            'username' =>'reactdev',
            'email' => 'reactdev@react.com',
            'password' => Hash::make('123456')
        ]);
    }
}
