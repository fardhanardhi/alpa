<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	for ($i=0; $i < 5; $i++) { 
	        DB::table('admins')->insert([
	            'nama' => $faker->name,
	            'username' => $faker->userName,
	            'password' => $faker->password,
	        ]);
    	}
    }
}