<?php
require_once __DIR__ . "/../src/Autoloader.php";

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-11 at 19:05:49.
 */
class TimesTest extends PHPUnit_Framework_TestCase {

    
    function testGetResultSuccess(){
        $plusObject=new Times(array(1,2));
        $this->assertEquals(2, $plusObject->getResult());
        $plusObject->setOperands(array(5,0));
        $this->assertEquals(0, $plusObject->getResult());
        $plusObject->setOperands(array(5,"2"));
        $this->assertEquals(10, $plusObject->getResult());
    }   
    
    function testGetResultThreeOperandsSuccess(){
        $plusObject=new Times(array(1,2,3));
        $this->assertEquals(6, $plusObject->getResult());
        $plusObject->setOperands(array(5,0,1));
        $this->assertEquals(0, $plusObject->getResult());
        $plusObject->setOperands(array(5,"2",3));
        $this->assertEquals(30, $plusObject->getResult());
    }  
    function testGetResultHexOctBinNumbersSuccess(){
        $plusObject=new Times(array(0x539,2));
        $this->assertEquals(1337*2, $plusObject->getResult());
        $plusObject->setOperands(array(02471,1));
        $this->assertEquals(1337, $plusObject->getResult());
        $plusObject->setOperands(array(0b10100111001,"-2"));
        $this->assertEquals(1337*(-2), $plusObject->getResult());
    }
    
    function testGetResultNegativeNumbersSuccess(){
        $plusObject=new Times(array(-1,2));
        $this->assertEquals(-2, $plusObject->getResult());
        $plusObject->setOperands(array(-5,-0));
        $this->assertEquals(0, $plusObject->getResult());
        $plusObject->setOperands(array(5,"-2"));
        $this->assertEquals(-10, $plusObject->getResult());
    } 
    
    function testGetResultExponentialNumbersSuccess(){
        $plusObject=new Times(array(1e1,2e2));
        $this->assertEquals(2000, $plusObject->getResult());
        $plusObject->setOperands(array(5e0,1));
        $this->assertEquals(5, $plusObject->getResult());
    } 
    
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testPHPUnit_Framework_Error()
    {
        $plusObject=new Times("1");
    } 
    
     /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorInvalidArgumentException()
    {
        $plusObject=new Times(array('sss', 1));
    } 

}

