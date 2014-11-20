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
           'id' => 1,
           'application' => 'Autoridades Ambientales',
           'specific_application' => 'Cobro de tasas retributivas por uso de agua.',
           'compliance' => 'Si',
           'deadline' => 'No Aplica',
           'information_compliance' => 'Es la base para que las Autoridades Ambientales hagan el cobro de las tasas por uso.',
           'requisite_id' => 1 
        ));
        
        Evaluation::create(array(
           'id' => 2,
           'application' => 'Si',
           'specific_application' => 'La empresa debe contar con sistema de recolección de todas las aguas.',
           'compliance' => 'Si',
           'deadline' => 'Continuo',
           'information_compliance' => 'Se cuenta con un plano de redes de aguas por cada planta para verificar el cumplimiento de esta norma.',
           'requisite_id' => 2 
        ));
        
        Evaluation::create(array(
           'id' => 3,
           'application' => 'Si',
           'specific_application' => 'La disminución progresiva o el agotamiento del recurso es causal del retiro de la concesión de aguas.',
           'compliance' => 'Si',
           'deadline' => '',
           'information_compliance' => '',
           'requisite_id' => 3
        ));
        
        Evaluation::create(array(
           'id' => 4,
           'application' => 'Solo Informativa',
           'specific_application' => 'Toda edificación o concentración de éstas, ubicada en áreas o sectores que carezcan de alcantarillado público o privado deberá dotarse de un sistema sanitario de disposición de excretas.',
           'compliance' => 'En Inplementacion',
           'deadline' => 'Continuo',
           'information_compliance' => 'Ambas plantas de producción cuentan con los respectivos sistemas de tratamiento de aguas residuales domésticas.',
           'requisite_id' => 4 
        ));
        
        Evaluation::create(array(
           'id' => 5,
           'application' => 'Si',
           'specific_application' => 'El uso del recurso agua está sujeto a pago de tasas que fije el gobierno nacional.',
           'compliance' => 'Si',
           'deadline' => 'Continuo',
           'information_compliance' => 'No es aplicable para la planta Cartagena por no ser usuarios de concesión. Aplica planta Rionegro.',
           'requisite_id' => 5 
        ));
        
        Evaluation::create(array(
           'id' => 6,
           'application' => 'Si',
           'specific_application' => 'Arclad está sujeta al pago compensatorio de tasas por la utilización de agua para introducir desechos producto de sus actividades.',
           'compliance' => 'Si',
           'deadline' => 'Continuo',
           'information_compliance' => 'Es aplicable a la planta Rionegro por vertimiento de aguas residuales domésticas a cuerpo de agua. Planta Cartagena está en gestión por no verter directamente a cuerpos de agua, si no a alcantarillado de parque infustrial.',
           'requisite_id' => 6 
        ));
        
        Evaluation::create(array(
           'id' => 7,
           'application' => 'Solo Informativa',
           'specific_application' => 'Las Corporaciones Autónomas serán las encargadas de las Concesiones ambientales.',
           'compliance' => 'Parcialmente',
           'deadline' => 'Continuo',
           'information_compliance' => 'Es de carácter informativo a la hora de requerir un permiso ambiental aplicable.',
           'requisite_id' => 7 
        ));
        
        
    }
}
