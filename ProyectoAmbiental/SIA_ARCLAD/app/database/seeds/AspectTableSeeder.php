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
        Aspect::create(array(
            'id' => 5,
           'name' => 'Gases Efecto Invernadero'
        ));
        
        Aspect::create(array(
            'id' => 6,
           'name' => 'Captación de Agua'
        ));
        
        Aspect::create(array(
            'id' => 7,
           'name' => 'Vertimiento de Agua Residual Doméstica a Cuerpos de Agua'
        ));
        
        Aspect::create(array(
            'id' => 8,
           'name' => 'Vertimiento de Agua Residual Doméstica a Suelo'
        ));
        
        Aspect::create(array(
            'id' => 9,
           'name' => 'Aceites Usados'
        ));
        
        Aspect::create(array(
            'id' => 10,
           'name' => 'Residuos Electrónicos'
        ));
        
        Aspect::create(array(
            'id' => 11,
           'name' => 'Disposición de Residuos Sólidos'
        ));
        
        Aspect::create(array(
            'id' => 12,
           'name' => 'Disposición de Residuos Peligrosos'
        ));
        
        Aspect::create(array(
            'id' => 13,
           'name' => 'Disposición de Residuos Especiales'
        ));
        
        Aspect::create(array(
            'id' => 14,
           'name' => 'Uso Eficiente y Racional de Agua'
        ));
        
        Aspect::create(array(
            'id' => 15,
           'name' => 'Planes PosConsumo'
        ));
        
        Aspect::create(array(
            'id' => 16,
           'name' => 'Ruido Ambiental'
        ));
        
        Aspect::create(array(
            'id' => 17,
           'name' => 'Manejo de Sustancias Químicas'
        ));
        
        Aspect::create(array(
            'id' => 18,
           'name' => 'Planes de Emergencia y Contingencia'
        ));
        Aspect::create(array(
            'id' => 19,
           'name' => 'Educación Ambiental'
        ));
        
        Aspect::create(array(
            'id' => 20,
           'name' => 'Obligaciones como Usuarios de Servicio Público de Aseo'
        ));
        
       
        
        
        
        
        
    }
}
