<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('users')->delete();
        
        User::create(array(
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ));
        
        User::create(array(
            'name' => 'foo',
            'email' => 'foo@gmail.com',
            'password' => Hash::make('123456')
        ));
        
        User::create(array(
            'name' => 'bar',
            'email' => 'bar@gmail.com',
            'password' => Hash::make('123456')
        ));
    }
}