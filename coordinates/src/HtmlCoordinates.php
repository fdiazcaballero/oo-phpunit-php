<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HtmlCoordinates
 *
 * @author Fernando Diaz Caballero
 */
class HtmlCoordinates implements ICoordinates {
    /**
     * 
     * @param CoordinatesObject $obj
     */
    public function write(CoordinatesObject $obj) {    
        
        //header('Content-Type: text/html');
        $html_str="";
        $html_str.= "<html>\n";
        $html_str.= "<body>\n";
        $html_str.= "  <table border=1>\n";
        foreach ($obj->getCoordinates() as $value) {
        $html_str.= "  <tr>\n";
            foreach ($value as $v1) {
                if (!is_numeric($v1)){
                    throw new Exception("Coordinates must be numeric");
                }
                $html_str.= "      <td>".$v1 ."</td>\n";                
            }
        $html_str.= "  </tr>\n";
        }
        $html_str.= "  </table>\n";
        $html_str.= "</body>\n";
        $html_str.= "</html>\n"; 
        echo nl2br($html_str, false);
    }

}
