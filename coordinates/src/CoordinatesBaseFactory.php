<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoordinatesBaseFactory
 *
 * @author Fernando Diaz Caballero
 */
class CoordinatesBaseFactory {
    
    /**
     * 
     * @param type $content_type
     * @return \class
     * @throws Exception
     */
    public static function getWriter($content_type=null) {
    
        if((isset($_SERVER["CONTENT_TYPE"]) && $_SERVER["CONTENT_TYPE"]=="text/csv")
                ||(isset($content_type) && $content_type=="text/csv")){
            $format = "CSV";
        }
        else {
            $format="Html";
        }
    
        $class =  $format . 'Coordinates';
        if(class_exists($class)) {
            return new $class();
        }
        // otherwise we fail
        throw new Exception('Unsupported format');
    }
}
