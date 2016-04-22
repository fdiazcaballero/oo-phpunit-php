<?php

/**
 * Description of Solver
 *
 * @author Fernando Diaz Caballero
 */
class Solver {
    
    /**
     * 
     * @param array $operation
     * @return type
     * @throws InvalidArgumentException
     * @throws LengthException
     * 
     */
    public function solve(array $operation){
       
        if(count($operation)!=3){
            throw new LengthException ("Array's lenght must be 3.");
        }
        else{
            $class_name=array_splice($operation,1,1)[0];            
            $operator = new $class_name($operation);
            return $operator->getResult();
        }
            
    }
}
