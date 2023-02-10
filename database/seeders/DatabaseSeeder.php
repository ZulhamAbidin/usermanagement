<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();

        User::create([
            'name' => 'astriayuningsih',
            'email' => 'astriayuningsih@gmail.com',
            'password' => bcrypt('astriayuningsih'),
            'is_admin' => '1',
        ]);


        User::create([
            'name' => 'zulhamabidin',
            'email' => 'zulhamabidin@gmail.com',
            'password' => bcrypt('zulhamabidin')
        ]);
    }
}
