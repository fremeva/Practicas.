<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EvaluationTableSeeder
 *
 * @author practicantetic.ctg
 */
class EvaluationTableSeeder extends Seeder{
    //put your code here
    public function run(){
        DB::table('evaluations')->delete();
        
        Evaluation::create(array(
           'application' => 'Autoridades Ambientales',
           'specific_application' => 'Cobro de tasas retributivas por uso de agua.',
           'compliance' => 'Si',
           'deadline' => 'No Aplica',
           'information_compliance' => 'Es la base para que las Autoridades Ambientales hagan el cobro de las tasas por uso.'
        ));
    }
}
