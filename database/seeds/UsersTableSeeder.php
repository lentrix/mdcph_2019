<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => "Benjie B. Lenteria",
            'username' => 'lentrix',
            'password' => bcrypt('system'),
            'role' => 'admin'
        ]);

        factory(\App\User::class, 5)->create();
    }
}
