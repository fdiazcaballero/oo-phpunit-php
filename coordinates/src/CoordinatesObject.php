<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoordinatesObject
 *
 * @author Fernando
 */
class CoordinatesObject {
    /**
     *
     * @var array(array())
     */
    protected $coordinates;
 
    /**
     * 
     * @param type $crds
     */
    public function  __construct($crds) {
        $this->coordinates = $crds;
    }
    
    /**
     * 
     * @param ICoordinates $writer
     * @return string
     */
    public function write(ICoordinates $writer) {
        return $writer->write($this);
    }
    
    /**
     * 
     * @param type $crds
     * @return \CoordinatesObject
     */
    public function setCoordinates($crds){
        $this->coordinates = $crds;
        return $this;
    }
    
    /**
     * 
     * @return array(array())
     */
    public function getCoordinates(){
        return $this->coordinates;
    }
    
}
