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
            'username' => 'admin', 
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('admin@123'), 
            'role'=>'admin'
        ]);
    }
}
