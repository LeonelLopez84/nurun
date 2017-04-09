<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * insert First user
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
	            'name' =>'Reclutamiento Digital',
	            'email' => "rhdigitaldev@gmail.com",
	   			'password'=>bcrypt(123456), 
	   			'remember_token' => str_random(10),
	   			'created_at'=> new DateTime, 
	            'updated_at'=> new DateTime
	        ]);
    }
}
