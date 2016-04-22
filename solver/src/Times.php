<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plus
 *
 * @author Fernando Diaz Caballero
 */
class Times extends Operator{
    
    /**
     * 
     * @param array $operands
     */
    public function __construct(array $operands){
        $this->checkOperands($operands);
        $this->operands=$operands;
    }
    
    /**
     * 
     * @return Number
     */
    public function getResult(){
        $result=1;
        foreach($this->operands as $operand){
            $result*=$operand;
            if($result==0){
                break;
            }
        }        
        return $result;
    }

}
