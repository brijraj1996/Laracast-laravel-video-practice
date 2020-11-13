<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'john doe',
            'email' => 'admin@test.com',
            'password' => bcrypt('password')
        ]);
    }
}
