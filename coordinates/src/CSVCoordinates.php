<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSVCoordinates
 *
 * @author Fernando Diaz Caballero
 */
class CsvCoordinates implements ICoordinates{
    
    /**
     * 
     * @param CoordinatesObject $obj
     * 
     */
    public function write(CoordinatesObject $obj) {
        //header("Content-Type=text/csv");
        $csv_str="coordinate x, coordinate y\n";        
        foreach ($obj->getCoordinates() as $value) {
            foreach ($value as $v1) {
                if (!is_numeric($v1)){
                    throw new Exception("Coordinates must be numeric");
                }
                $csv_str.= $v1 .",";                
            }
        $csv_str=rtrim($csv_str, ",");
        $csv_str.= "\n";
        }
        echo rtrim($csv_str, "\n");      
    }
}
