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
           'id' => 1,
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
        
        Requisite::create(array(
           'id' => 2,
           'year' => '1974',
           'month' => 'Diciembre',
           'norm' => 'Decreto/ley',
           'norm_number' => '2811',
           'aspect_id' => 30,
           'article' => '142',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
        
        Requisite::create(array(
           'id' => 3,
           'year' => '1974',
           'month' => 'Diciembre',
           'norm' => 'Decreto/ley',
           'norm_number' => '2811',
           'aspect_id' => 35,
           'article' => '61',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
        
        Requisite::create(array(
           'id' => 4,
           'year' => '1979',
           'month' => 'Enero',
           'norm' => 'Ley',
           'norm_number' => '9',
           'aspect_id' => 30,
           'article' => '36',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
        
        Requisite::create(array(
           'id' => 5,
           'year' => '1993',
           'month' => 'Diciembre',
           'norm' => 'Ley',
           'norm_number' => '99',
           'aspect_id' => 28,
           'article' => '43',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
        
        Requisite::create(array(
           'id' => 6,
           'year' => '1993',
           'month' => 'Diciembre',
           'norm' => 'Ley',
           'norm_number' => '99',
           'aspect_id' => 27,
           'article' => '42',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
        
        Requisite::create(array(
           'id' => 7,
           'year' => '1993',
           'month' => 'Diciembre',
           'norm' => 'Ley',
           'norm_number' => '99',
           'aspect_id' => 26,
           'article' => '31',
           'modifications' => 'Ninguna',
           'repeals' => 'Ninguna',
           'state' => 'Vigente'
        ));
        
        
    }
}
