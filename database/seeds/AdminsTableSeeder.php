<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        App\Admin::create([
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'name'=>'admin'
        ]);
    }
}
