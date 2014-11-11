<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTableSeeder
 *
 * @author practicantetic.ctg
 */
class UserTableSeeder extends Seeder{
    //put your code here
    public function run(){
    DB::table('users')->delete();
    user::create(array(
            'name'          =>'jairo martinesz',
            'username'      =>'jairito07',
            'email'         => 'jairo.martinez@arclad.com',
            'password'      => Hash::make('centrino89'),
            
            ));
    
     user::create(array(
            'name'          =>'Fredy Mendoza',
            'username'      =>'fredy',
            'email'         => 'fredy.mendoza@arclad.com',
            'password'      => Hash::make('centrino89'),
            
            ));
     
     user::create(array(
            'name'          =>'Diego Velez Carrion',
            'username'      =>'diego.velez',
            'email'         => 'diego.velez@arclad.com',
            'password'      => Hash::make('D13g0V3l3z'),
            
            ));
    }
}
