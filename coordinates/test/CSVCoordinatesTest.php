<?php
require_once __DIR__ . "/../src/Autoloader.php";

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-11 at 19:05:49.
 */
class HtmlCoordinatesTest extends PHPUnit_Framework_TestCase {

    protected $object;
    protected $coordinates;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new CSVCoordinates();
        $this->coordinates=new CoordinatesObject(array(array(1,1), array(1,3)));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        $this->object = null;
        $this->coordinates=null;
    }
    
    function testWriteSuccess(){
        $this->expectOutputString(
'coordinate x, coordinate y
1,1
1,3');
        $this->object->write($this->coordinates);         
    }
    
     /**
     * @expectedException Exception
     * @expectedExceptionMessage Coordinates must be numeric
     */
    function testWriteException(){
        $this->coordinates->setCoordinates(array(array(1,"error!"), array(1,3)));
        $this->object->write($this->coordinates);         
    }
    
}
