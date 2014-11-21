<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class EquipoTableSeeder extends Seeder {
    public function run() {
        DB::table('equipos')->delete();

        Equipo::create(array(
            'name' => 'Fredy',
            'referencia' => 'Hp',
            'sede' => 'RIO'
        ));
        
        Equipo::create(array(
            'name' => 'FredSDSDy',
            'referencia' => 'HFDFDp',
            'sede' => 'CTG'
        ));
    }

}
