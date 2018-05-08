<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'status' => 1,
            'password' => bcrypt('secret'),
        ]);
    }
}
