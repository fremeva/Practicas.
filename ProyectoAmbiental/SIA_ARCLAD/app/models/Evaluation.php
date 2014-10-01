<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluation
 *
 * @author practicantetic.ctg
 */
class Evaluation extends Eloquent{
    //put your code here
    
    public function requisite()
    {
        return $this->belongsTo('Requisite');
    }
    
    public function planning()
    {
        return $this->hasOne('Planning','evaluation_id');
    }
}
