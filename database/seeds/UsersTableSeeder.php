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
        DB::table('users')->insert([
            'name' => 'Hitesh Roy',
            'email' => 'admin@12345',
            'password' => bcrypt('admin@12345'),
        ]);
    }
}
