<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Cary Huit',
            'email' => 'caryhuit@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('huit1234')
        ],
        [
            'name' => 'Faith Huit',
            'email' => 'faithhuit@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('huit12345')
        ],
        [
            'name' => 'Nicah Huit',
            'email' => 'nicahhiut@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('huit12345')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
