<?php
require_once __DIR__ . "/../src/Autoloader.php";

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-11 at 19:05:49.
 */
class HtmlCoordinatesTest extends PHPUnit_Framework_TestCase {

    /**
     *
     * @var HtmlCoordinates
     */
    protected $object;
    
    /**
     *
     * @var CoordinatesObject 
     */
    protected $coordinates;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new HtmlCoordinates();
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
    
    function testWrite(){
        $this->expectOutputString(
'<html><br>
<body><br>
  <table border=1><br>
  <tr><br>
      <td>1</td><br>
      <td>1</td><br>
  </tr><br>
  <tr><br>
      <td>1</td><br>
      <td>3</td><br>
  </tr><br>
  </table><br>
</body><br>
</html><br>
');
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
