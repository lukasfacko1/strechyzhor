<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
           'name' => 'Pavel Soch',
            'email' => 'strechyzhor@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
