<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlanningTableSeeder
 *
 * @author practicantetic.ctg
 */
class PlanningTableSeeder extends Seeder{
    //put your code here
    public function run(){
        DB::table('plannings')->delete();
        
        Planning::create(array(
           'id' => 1,
           'required_activities' => 'Verificaciones de calibración y mediciones continuas del caudal captado.',
           'responsible' => 'Ingeniería y Mantenimiento',
           'term' => 'No Aplica',
           'resources' => 'Operador de Planta',
           'monitoring' => 'Registro diario de captación.',
           'plan_status' => 'Ejecutada',
           'evaluation_id' => 1  
        ));
        
        Planning::create(array(
           'id' => 2,
           'required_activities' => 'Tener en cuenta para la ejecución de nuevas obras de construcción.',
           'responsible' => 'Ingeniería y Mantenimiento',
           'term' => 'Continuo',
           'resources' => 'No Aplica',
           'monitoring' => 'Requerimiento ejecutado',
           'plan_status' => 'Ejecutada',
           'evaluation_id' => 2  
        ));
           
               
        Planning::create(array(
           'id' => 3,
           'required_activities' => 'Mantenimientos preventivos y correctivos.',
           'responsible' => 'Ingeniería y Mantenimiento',
           'term' => 'Continuo',
           'resources' => 'Operador de Planta',
           'monitoring' => 'Requerimiento ejecutado.',
           'plan_status' => 'Ejecutada',
           'evaluation_id' => 4  
        ));
        
        
        
               
    }
}
