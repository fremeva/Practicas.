<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AspectTableSeeder
 *
 * @author practicantetic.ctg
 */
class AspectTableSeeder extends Seeder{
    //put your code here
    public function run(){
        DB::table('aspects')->delete();
        
        Aspect::create(array(
           'id' => 1,
           'name' => 'Actividades Sujetas a Comunicación'
        ));
        
        Aspect::create(array(
            'id' => 2,
           'name' => 'Fuentes Fijas de Emisión'
        ));
        
        Aspect::create(array(
            'id' => 3,
           'name' => 'Fuentes Móviles de Emisión'
        ));
        
        Aspect::create(array(
            'id' => 4,
           'name' => 'Consumo de Energía'
        ));
    }
}
