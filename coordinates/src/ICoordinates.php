<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Coordinates interface
 * 
 * @author Fernando Diaz Caballero
 */
interface ICoordinates {
    /**
     * 
     * @param CoordinatesObject $obj
     */
    public function write(CoordinatesObject $obj);
}