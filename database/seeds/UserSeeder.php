<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
    		'name' => 'Immanuel Richie',
    		'email' => 'admin@admin',
    		'email_verified_at' => now(),
    		'password' => bcrypt('admin123'),
    		'role' => 0
    	]);
    }
}
