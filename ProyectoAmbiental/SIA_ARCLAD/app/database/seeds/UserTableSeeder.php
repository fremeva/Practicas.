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
    User::create(array(
            'name'          =>'Jairo Manuel Martinez Giraldo',
            'username'      =>'jairo.martinez',
            'email'         => 'jairo.martinez@arclad.com',
            'password'      => Hash::make('centrino89'),
            
            ));
    
     User::create(array(
            'name'          =>'Fredy Mendoza Vargas',
            'username'      =>'fredy.mendoza',
            'email'         => 'fredy.mendoza@arclad.com',
            'password'      => Hash::make('centrino89'),
            
            ));
     
     User::create(array(
            'name'          =>'Diego Velez Carrion',
            'username'      =>'diego.velez',
            'email'         => 'diego.velez@arclad.com',
            'password'      => Hash::make('D13g0V'),
            
            ));

    User::create(array(
                'name'          =>'Javier Ariza',
                'username'      =>'javier.ariza',
                'email'         => 'javier.ariza@arclad.com',
                'password'      => Hash::make('jariza1711'),

                ));
        }
}
