<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        App\User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'gender'=>'male',
            'phone'=>'0797909406',
            'commission'=>'5',
            'password'=>bcrypt('password'),
            
         ]);
      

    }
}
