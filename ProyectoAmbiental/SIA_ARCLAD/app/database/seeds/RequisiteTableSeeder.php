<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RequisiteTableSeeder
 *
 * @author practicantetic.ctg
 */
class RequisiteTableSeeder extends Seeder{
    //put your code here
    public function run(){
        DB::table('requisites')->delete();
        
        Requisite::create(array(
           'year' => '1974',
           'month' => 'Diciembre',
           'norm' => 'Decreto/ley',
           'norm_number' => '2811',
           'aspect_id' => 1,
           'article' => '121',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
    }
}
