<?php

/**
 *
 * @author Fernando Diaz Caballero
 */
abstract class Operator {
    
    //since operands is an array, it will work for more than two operands.
    protected $operands;
    abstract function getResult();
    
    /**
     * 
     * @param array $operands
     * @throws InvalidArgumentException
     */
    protected function checkOperands(array $operands){
        foreach($operands as $operand){
            if (!is_numeric($operand)){
                throw new InvalidArgumentException("Operands must be numbers.");
            }
        }
    }
    
    /**
     * 
     * @param array $operands
     * @return \Operator
     */
    public function setOperands(array $operands)
    {
        $this->checkOperands($operands);
        $this->operands=$operands;
        return $this;
    }
    
    /**
     * 
     * @return array
     */
    public function getOperands()
    {
        return $this->operands;
    }
}
