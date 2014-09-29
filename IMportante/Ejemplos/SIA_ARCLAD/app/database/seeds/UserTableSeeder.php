<?php

class UserTableSeeder extends Seeder{
    
    
    public function run(){
    DB::table('users')->delete();
    user::create(array(
            'name'          =>'jairo martinesz',
            'username'      =>'jairito07',
            'email'         => 'jairo.martinez@arclad.com',
            'password'      => Hash::make('12345'),
            
            ));
    
     user::create(array(
            'name'          =>'Freddy Mendoza',
            'username'      =>'freddy',
            'email'         => 'fredy.mendoza@arclad.com',
            'password'      => Hash::make('54321'),
            
            ));
    }
    
}