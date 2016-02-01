<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'admin',
            'admin' => 1,
            'email' => 'admin@dailyblog.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
