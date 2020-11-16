<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        User::create([
            'username'=>'Turnyur'/*$faker->username*/,
            'firstname'=>$faker->firstname,
            'lastname'=>$faker->lastname,
            'email'=>$faker->email,
            'is_super_admin'=>true,
            'password'=>bcrypt('kindmank'),



        ]);

    }
}





