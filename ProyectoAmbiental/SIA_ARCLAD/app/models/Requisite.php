<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Requisite
 *
 * @author practicantetic.ctg
 */
class Requisite extends Eloquent{
    //put your code here
    
    public function aspect()
    {
        return $this->belongsTo('Aspect');
    }
    
    public function evaluation()
    {
        return $this->hasOne('Evaluation','requisite_id');
    }
}
